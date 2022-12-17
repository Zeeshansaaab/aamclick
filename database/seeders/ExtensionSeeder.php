<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class ExtensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extensions')->insert([
            'act' => 'tawk-chat',
            'name' => 'Tawk.to',
            'description' => 'Key location is shown bellow',
            'image' => 'tawky_big.png',
            'script' => '<script>
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src="https://embed.tawk.to/{{app_key}}";
            s1.charset="UTF-8";
            s1.setAttribute("crossorigin","*");
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>',
            'shortcode' => '{"app_key":{"title":"App Key","value":"------"}}',
            'support' => 'twak.png',
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('extensions')->insert([
            'act' => 'google-recaptcha2',
            'name' => 'Google Recaptcha 2',
            'description' => 'Key location is shown bellow',
            'image' => 'recaptcha3.png',
            'script' => '
            <script src="https://www.google.com/recaptcha/api.js"></script>
            <div class="g-recaptcha" data-sitekey="{{site_key}}" data-callback="verifyCaptcha"></div>
            <div id="g-recaptcha-error"></div>',
            'shortcode' => '{"site_key":{"title":"Site Key","value":"-"},"secret_key":{"title":"Secret Key","value":"-"}}',
            'support' => 'recaptcha.png',
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('extensions')->insert([
            'act' => 'custom-captcha',
            'name' => 'Custom Captcha',
            'description' => 'Just put any random string',
            'image' => 'customcaptcha.png',
            'script' => null,
            'shortcode' => '{"random_key":{"title":"Random String","value":"-----"}}',
            'support' => 'na',
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('extensions')->insert([
            'act' => 'google-analytics',
            'name' => 'Google Analytics',
            'description' => 'Key location is shown bellow',
            'image' => 'google_analytics.png',
            'script' => '<script async src="https://www.googletagmanager.com/gtag/js?id={{app_key}}"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag("js", new Date());

              gtag("config", "{{app_key}}");
            </script>',
            'shortcode' => '{"app_key":{"title":"App Key","value":"------"}}',
            'support' => 'ganalytics.png',
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('extensions')->insert([
            'act' => 'fb-comment',
            'name' => 'Facebook Comment ',
            'description' => 'Key location is shown bellow',
            'image' => 'Facebook.png',
            'script' => '<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId={{app_key}}&autoLogAppEvents=1"></script>',
            'shortcode' => '{"app_key":{"title":"App Key","value":"----"}}',
            'support' => 'fb_com.PNG',
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
