<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Frontend;
use App\Models\Language;
use App\Models\Withdrawal;
use App\Models\SupportTicket;
use App\Models\GeneralSetting;
use App\Models\AdminNotification;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\LengthAwarePaginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!Collection::hasMacro('paginate')) {

            Collection::macro('paginate', 
                function ($perPage = 15, $page = null, $options = []) {
                $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
                return (new LengthAwarePaginator(
                    $this->forPage($page, $perPage), $this->count(), $perPage, $page, $options))
                    ->withPath('');
            });
        }
        if(Schema::hasTable('general_settings')){
            $activeTemplate = activeTemplate();

            $general = Cache::get('GeneralSetting');
            if (!$general) {
                $general = GeneralSetting::first();/// call from DB
                Cache::put('GeneralSetting', $general);
            }
            $viewShare['general'] = $general;;
            $viewShare['activeTemplate'] = $activeTemplate;
            $viewShare['activeTemplateTrue'] = activeTemplate(true);
            $viewShare['language'] = Language::all();
            $viewShare['pages'] = Page::where('tempname',$activeTemplate)->where('is_default',0)->get();
            $viewShare['emptyMessage'] = 'Data not found';
            view()->share($viewShare);


            view()->composer('admin.partials.sidenav', function ($view) {
                $view->with([
                    'bannedUsersCount'           => User::banned()->count(),
                    'emailUnverifiedUsersCount' => User::emailUnverified()->count(),
                    'mobileUnverifiedUsersCount'   => User::mobileUnverified()->count(),
                    'kycUnverifiedUsersCount'   => User::kycUnverified()->count(),
                    'kycPendingUsersCount'   => User::kycPending()->count(),
                    'pendingTicketCount'         => SupportTicket::whereIN('status', [0,2])->count(),
                    'pendingDepositsCount'    => Deposit::pending()->count(),
                    'pendingWithdrawCount'    => Withdrawal::pending()->count(),
                ]);
            });

            view()->composer('admin.partials.topnav', function ($view) {
                $view->with([
                    'adminNotifications'=>AdminNotification::where('read_status',0)->with('user')->orderBy('id','desc')->take(10)->get(),
                    'adminNotificationCount'=>AdminNotification::where('read_status',0)->count(),
                ]);
            });

            view()->composer('partials.seo', function ($view) {
                $seo = Frontend::where('data_keys', 'seo.data')->first();
                $view->with([
                    'seo' => $seo ? $seo->data_values : $seo,
                ]);
            });
            if($general->force_ssl){
                \URL::forceScheme('https');
            }

        }   
        // dd($general);
        Paginator::useBootstrapFour();
    }
}
