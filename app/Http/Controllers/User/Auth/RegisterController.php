<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminNotification;
use App\Models\GeneralSetting;
use App\Models\Plan;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('checkUser');
        $this->middleware('registration.status')->except('registrationNotAllowed');
        $this->activeTemplate = activeTemplate();
    }

    public function showRegistrationForm()
    {
        $pageTitle = "Register";
        $info = json_decode(json_encode(getIpInfo()), true);
        $mobile_code = @implode(',', $info['code']);
        $countries = json_decode(file_get_contents(resource_path('views/partials/country.json')));
        return view($this->activeTemplate . 'user.auth.register', compact('pageTitle','mobile_code','countries'));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $general = GeneralSetting::first();
        $passwordValidation = Password::min(6);
        if ($general->secure_password) {
            $passwordValidation = $passwordValidation->mixedCase()->numbers()->symbols()->uncompromised();
        }
        $agree = 'nullable';
        if ($general->agree) {
            $agree = 'required';
        }
        // $countryData = (array)json_decode(file_get_contents(resource_path('views/partials/country.json')));
        // $countryCodes = implode(',', array_keys($countryData));
        // $mobileCodes = implode(',',array_column($countryData, 'dial_code'));
        // $countries = implode(',',array_column($countryData, 'country'));
        $validate = Validator::make($data, [
            'name' => 'required|alpha_num|min:6',
            'email' => 'required|string|email|unique:users',
            'mobile' => 'required|regex:/^([0-9]*)$/',
            'password' => ['required','confirmed',$passwordValidation],
            'captcha' => 'sometimes|required',
            // 'country_code' => 'required|in:'.$countryCodes,
            // 'country' => 'required|in:'.$countries,
            'agree' => $agree
        ]);
        return $validate;

    }

    public function register(Request $request)
    {
        
        $this->validator($request->all())->validate();
        
        $request->session()->regenerateToken();

        // if(preg_match("/[^a-z0-9_]/", trim($request->username))){
        //     $notify[] = ['info', 'Username can contain only small letters, numbers and underscore.'];
        //     $notify[] = ['error', 'No special character, space or capital letters in username.'];
        //     return back()->withNotify($notify)->withInput($request->all());
        // }

        if(!verifyCaptcha()){
            $notify[] = ['error','Invalid captcha provided'];
            return back()->withNotify($notify);
        }


        // $exist = User::where('mobile',$request->mobile_code.$request->mobile)->first();
        $exist = User::where('mobile',$request->mobile)->first();
        if ($exist) {
            $notify[] = ['error', 'The mobile number already exists'];
            return back()->withNotify($notify)->withInput();
        }

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $general = GeneralSetting::first();

        // $referBy = session()->get('reference');
        $referUser = User::where('aam_id', $data['referBy'])->first();
        // if (!$referUser) {
        //     $referUser = User::where('aam_id', 'aamclick')->first();
        // }         //User Create
        
        
        $user = new User();
        $user->email = strtolower(trim($data['email']));
        $user->password = Hash::make($data['password']);
        $user->name = trim($data['name']);
        $user->plan_id = 1;
        $user->ref_by = $referUser ? $referUser->id : 1;
        // $user->country_code = $data['country_code'];
        // $user->mobile = $data['mobile_code'].$data['mobile'];
        $user->mobile = $data['mobile_code'].$data['mobile'];
        // $user->address = [
        //     'address' => '',
        //     'state' => '',
        //     'zip' => '',
        //     'country' => isset($data['country']) ? $data['country'] : null,
        //     'city' => ''
        // ];
        $user->address = [
            'address' => '',
            'state' => '',
            'zip' => '',
            'country' => isset($data['country']) ? $data['country'] : null,
            'city' => ''
        ];
        $user->status = 1;
        $user->kv = $general->kv ? 0 : 1;
        $user->ev = $general->ev ? 0 : 1;
        $user->sv = $general->sv ? 0 : 1;
        $user->ts = 0;
        $user->tv = 1;
        $user->aam_id = getUserId();
        $user->save();

        if ($general->registration_bonus > 0) {

            $transaction = new Transaction();
            $transaction->user_id = $user->id;
            $transaction->amount = $general->registration_bonus;
            $transaction->post_balance = 0;
            $transaction->charge = 0;
            $transaction->trx_type = '+';
            $transaction->details = 'Registration Bonus';
            $transaction->remark = 'registration_bonus';
            $transaction->trx = getTrx();
            $transaction->save();
        }

        $plan = Plan::where('status',1)->find($general->default_plan);
        if ($plan) {
            $user->expire_date = now()->addDays($plan->validity);
            $user->plan_id = $plan->id;
            $user->save();
        }


        $adminNotification = new AdminNotification();
        $adminNotification->user_id = $user->id;
        $adminNotification->title = 'New member registered';
        $adminNotification->click_url = urlPath('admin.users.detail',$user->id);
        $adminNotification->save();


        //Login Log Create
        $ip = getRealIP();
        $exist = UserLogin::where('user_ip',$ip)->first();
        $userLogin = new UserLogin();

        //Check exist or not
        if ($exist) {
            $userLogin->longitude =  $exist->longitude;
            $userLogin->latitude =  $exist->latitude;
            $userLogin->city =  $exist->city;
            $userLogin->country_code = $exist->country_code;
            $userLogin->country =  $exist->country;
        }else{
            $info = json_decode(json_encode(getIpInfo()), true);
            $userLogin->longitude =  @implode(',',$info['long']);
            $userLogin->latitude =  @implode(',',$info['lat']);
            $userLogin->city =  @implode(',',$info['city']);
            $userLogin->country_code = @implode(',',$info['code']);
            $userLogin->country =  @implode(',', $info['country']);
        }

        $userAgent = osBrowser();
        $userLogin->user_id = $user->id;
        $userLogin->user_ip =  $ip;

        $userLogin->browser = @$userAgent['browser'];
        $userLogin->os = @$userAgent['os_platform'];
        $userLogin->save();


        return $user;
    }

    public function checkUser(Request $request){
        $exist['data'] = false;
        $exist['type'] = null;
        if ($request->email) {
            $exist['data'] = User::where('email',$request->email)->exists();
            $exist['type'] = 'email';
        }
        if ($request->mobile) {
            $exist['data'] = User::where('mobile',$request->mobile)->exists();
            $exist['type'] = 'mobile';
        }
        if ($request->aam_id) {
            $exist['data'] = User::where('aam_id',$request->aam_id)->exists();
            $exist['type'] = 'aam_id';
        }
        return response($exist);
    }

    public function registered()
    {
        return to_route('user.home');
    }

}
