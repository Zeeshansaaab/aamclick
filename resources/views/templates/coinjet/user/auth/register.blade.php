@extends($activeTemplate . 'layouts.front')
@push('styles')
 <!-- Colors -->
 <link rel="stylesheet" type="text/css" href="{{ asset($activeTemplateTrue . 'stylesheet/intlTelInput.min.css') }}" id="colors">  
@endpush
@push('javascript')
    <script src="{{ asset($activeTemplateTrue . 'javascript/intlTelInput.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'javascript/utils.js') }}"></script>
    {{--
    <script>
        var input = document.querySelector("#mobile");
        window.intlTelInput(input, {
          // any initialisation options go here
        });
      </script>--}}

@endpush
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');


:root{
    --primary: #F1A619;
}
*{
    font-family: 'Roboto', sans-serif;
}
form{
    width: 25%;
    margin:auto;
    background-color: #F0F2F5;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
    margin-top: 20px;
}
input{
    border: 2px solid rgba(0, 0, 0, 0.5)!important;
    font-size: 18px!important;
    border-radius: 0px!important;
    font-weight: 400!important;
    background: transparent!important;
    font-style: none;
    
}
.btn-reg{
    font-size: 18px!important;
    color: white;
    border-radius: 0px!important;
    font-weight: 400!important;
    background: var(--primary);
    border: none;
    width: 100%;
}
.btn-reg:hover{
    background: #c98d0d;
}
a{
    color:var(--primary);
}
.form-control:focus{
    box-shadow: none;
}
.form-check-input{
    margin-left: 0%;
}
.container-form{
    margin: auto
    height: auto;
    padding: 20px 40px;
    
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  font-style: normal!important;
  /* opacity: 1; Firefox */
}
@media only screen and (max-width: 600px) {
    form{
        width: 100%;
       
        padding: 30px 20px;
        margin:auto;
       
        margin-bottom: 10px;
    }
    
    }
    .my-setting{
        
        margin-bottom: 30px;
        margin-top: 30px;

    }
   
}
</style>
@section('content')
  <!-- Content Area -->
<center>
<div class="container-form">
        <form class="shadow loginForm" action="{{ route('user.register') }}" method="post">
        @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="@lang('Fullname')" class="form-control pl-3 py-3" placeholder="Fullname" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                 <input type="email" name="email" placeholder="@lang('Email')" class="form-control pl-3 py-3 checkUser" value="{{ old('email') }}" placeholder="Email" required autocomplete="off">
            </div>
             {{-- <div class="form-group">
               <label class="form-label">@lang('Country')</label>
                    <select name="country" class="form-control pl-3 py-3" required>
                        @foreach($countries as $key => $country)
                            <option data-mobile_code="{{ $country->dial_code }}" value="{{ $country->country }}" data-code="{{ $key }}">{{ __($country->country) }}</option>
                        @endforeach
                    </select>
            </div> --}}
                    
           
            
            
    
          <div class="form-group hover-input-popup">
            <input type="password" name="password" placeholder="@lang('Password')" class="form-control pl-3 py-3" required>
             @if($general->secure_password)
                <div class="input-popup">
                  <p class="error lower">@lang('1 small letter minimum')</p>
                  <p class="error capital">@lang('1 capital letter minimum')</p>
                  <p class="error number">@lang('1 number minimum')</p>
                  <p class="error special">@lang('1 special character minimum')</p>
                  <p class="error minimum">@lang('6 character password')</p>
                </div>
            @endif
          </div><!-- form-group end -->
          <div class="form-group mb-3">
            <input type="password" name="password_confirmation" placeholder="@lang('Re-type Password')" class="form-control pl-3 py-3" required>
          </div><!-- form-group end -->
          <x-captcha></x-captcha>
          <div class="form-group">
            <input type="text" name="referBy" id="referenceBy" class="form-control pl-3 py-3" value="{{session()->get('reference')}}" placeholder="AAM00001">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <select class="" name="mobile_code">
                <option selected>0300</option>
                @for($i=301; $i<350; $i++)
                    <option value="0{{$i}}">0{{$i}}</option>
                @endfor
            </select>
          </div>
           <input type="text" id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="1234567" class="form-control pl-3 py-3" maxlength="7" minlength="7" checkUser" required>          
        </div>
          {{--
          <div class="form-group">
            <input type="text" id="mobile" name="mobile" value="{{ old('mobile') }}" class=""  checkUser" required>          
        </div>--}}
        {{-- <div class="form-group">
            <div class="input-group ">
                <span class="input-group-text mobile-code">
                </span>
                <input type="hidden" name="mobile_code">
                <input type="hidden" name="country_code">
                <input type="text" id="mobile" name="mobile" value="{{ old('mobile') }}" class="form-control pl-3 py-3 checkUser" placeholder="Phone" required>
            </div>
            <small class="text-danger mobileExist"></small>
        </div> --}}
            @if($general->agree)
              <div class="form-group form-check my-setting">
                <input type="checkbox" id="agree" @checked(old('agree')) name="agree" class="form-check-input" required>
                    {{--<label for="agree">@lang('I agree with') @foreach($policyPages as $policy)--}} 
                        {{--  <a href="{{ route('policy.pages',[slug($policy->data_values->title),$policy->id]) }}">{{ __($policy->data_values->title) }}</a> @if(!$loop->last), @endif @endforeach--}}
                    
                    <label class="form-check-label" for="exampleCheck1">Accept <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policiy</a></label>
                    </label>
                 </div><!-- form-group end -->
                  @endif
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-reg">Create Account</button>
            </div>
            <p  class="text-center form-check-label" for="exampleCheck1">Already a member ? <a href="{{route('user.register')}}">Register</a></p>
        </form>
    </div>

</center>
        <!-- Content Area End -->
@endsection
@push('style')
<style>
    .country-code .input-group-text{
        background: #fff !important;
    }
    .country-code select{
        border: none;
    }
    .country-code select:focus{
        border: none;
        outline: none;
    }
</style>
@endpush
@push('script-lib')
<script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
@endpush
@push('script')
    <script>
      "use strict";
        (function ($) {
            @if($mobile_code)
            $(`option[data-code={{ $mobile_code }}]`).attr('selected','');
            @endif

            $('select[name=country]').change(function(){
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            @if($general->secure_password)
                $('input[name=password]').on('input',function(){
                    secure_password($(this));
                });

                $('[name=password]').focus(function () {
                    $(this).closest('.form-group').addClass('hover-input-popup');
                });

                $('[name=password]').focusout(function () {
                    $(this).closest('.form-group').removeClass('hover-input-popup');
                });


            @endif

            $('.checkUser').on('focusout',function(e){
                var url = '{{ route('user.checkUser') }}';
                var value = $(this).val();
                var token = '{{ csrf_token() }}';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {mobile:mobile,_token:token}
                }
                if ($(this).attr('name') == 'email') {
                    var data = {email:value,_token:token}
                }
                if ($(this).attr('name') == 'username') {
                    var data = {username:value,_token:token}
                }
                $.post(url,data,function(response) {
                  if (response.data != false && response.type == 'email') {
                    $('#existModalCenter').modal('show');
                  }else if(response.data != false){
                    $(`.${response.type}Exist`).text(`${response.type} already exist`);
                  }else{
                    $(`.${response.type}Exist`).text('');
                  }
                });
            });
        })(jQuery);

    </script>
@endpush
