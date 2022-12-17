<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class FrontendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frontends')->insert([
            'id' => 1,
            'data_keys' => 'seo.data',
            'data_values' => '{"seo_image":"1","keywords":["earn money"],"description":"AAM Click is a complete and ultimate PHP Script for Pay Per Click Platform. It developed with Laravel and Bootstrap 4.","social_title":"AAM Click","social_description":"AAM Click is a complete and ultimate PHP Script for Pay Per Click Platform. It developed with Laravel and Bootstrap 4.","image":"627909924b8061652099474.jpg"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'id' => 41,
            'data_keys' => 'cookie.data',
            'data_values' => '{"short_desc":"We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.","description":"<div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">What information do we collect?<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">How do we protect your information?<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">All provided delicate\/credit data is sent through Stripe.<br>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">Do we disclose any information to outside parties?<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">Children\'s Online Privacy Protection Act Compliance<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">Changes to our Privacy Policy<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">If we decide to change our privacy policy, we will post those changes on this page.<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">How long we retain your information?<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">What we don\u2019t do with your data<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\/p><\/div>","status":1}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'id' => 44,
            'data_keys' => 'maintenance.data',
            'data_values' => '{"description":"<div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">What information do we collect?<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">How do we protect your information?<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">All provided delicate\/credit data is sent through Stripe.<br>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">Do we disclose any information to outside parties?<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">Children\'s Online Privacy Protection Act Compliance<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">Changes to our Privacy Policy<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">If we decide to change our privacy policy, we will post those changes on this page.<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">How long we retain your information?<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\/p><\/div><div class=\"mb-5\" style=\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\"><h3 class=\"mb-3\" style=\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\">What we don\u2019t do with your data<\/h3><p class=\"font-18\" style=\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\/p><\/div>"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'banner.element',
            'data_values' => '{"has_image":"1","heading":"Best Possible Way for Earn From Home","subheading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!","button_1":"Sign Up","button_1_url":"register","button_2":"Sign In","button_2_url":"login","image":"6263b9309981d1650702640.png"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'banner.element',
            'data_values' => '{"has_image":"1","heading":"Start Earning From The Comfort of Home","subheading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!","button_1":"Login","button_1_url":"login","button_2":"Register","button_2_url":"register","image":"6263b954969731650702676.png"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'about.content',
            'data_values' => '{"has_image":"1","heading":"About PTCLab","description":"<p style=\"margin-top:15px;margin-right:0px;margin-left:0px;color:rgb(111,111,111);font-size:16px;font-family:Roboto, sans-serif;\">\u00a0Best Possible Way for Earn From Home. Temporibus eveniet commodi obcaecati voluptates reiciendis quis ipsum incidunt quibusdam aperiam autem suscipit maiores temporTemporibus eveniet commodi obcaecati voluptates reiciendis quis ipsum incidunt quibusdam aperiam autem suscipit maiores tempora impedit, exercitationem ratione distinctio nulla magni nemo cumque inventore sapiente nisi at vel. Laborum suscipit fuga.<\/p><ul class=\"cmn-list\" style=\"margin-top:20px;font-family:Roboto, sans-serif;\"><li style=\"color:rgb(111,111,111);margin-top:0px;margin-right:0px;margin-left:0px;font-size:16px;line-height:1.7;padding-left:40px;\">Dolores velit ad excepturi omnis quod nesciunt.<\/li><li style=\"color:rgb(111,111,111);margin-top:15px;margin-right:0px;margin-left:0px;font-size:16px;line-height:1.7;padding-left:40px;\">Cumque non labore recusandae, eaque quo sint.<\/li><li style=\"color:rgb(111,111,111);margin-top:15px;margin-right:0px;margin-left:0px;font-size:16px;line-height:1.7;padding-left:40px;\">Accusamus facere possimus illum, nulla nemo dolores.<\/li><li style=\"color:rgb(111,111,111);margin-top:15px;margin-right:0px;margin-left:0px;font-size:16px;line-height:1.7;padding-left:40px;\">Seriores nisi iure consequatur incidunt aliquam sunt.<\/li><\/ul>","video_url":"https:\/\/www.youtube.com\/embed\/GYYvKxchHrM","video_button_icon":"<i class=\"las la-play-circle\"><\/i>","image":"6263ba6f2de1c1650702959.png"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'features.content',
            'data_values' => '{"heading":"Benefits And Facilities","subheading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'features.element',
            'data_values' => '{"icon":"<i class=\"fas fa-globe-africa\"><\/i>","title":"We\'re Global","content":"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'features.element',
            'data_values' => '{"icon":"<i class=\"fas fa-headset\"><\/i>","title":"Best Support","content":"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'features.element',
            'data_values' => '{"icon":"<i class=\"lab la-bitcoin\"><\/i>","title":"We Accept Crypto","content":"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'features.element',
            'data_values' => '{"icon":"<i class=\"fas fa-chart-area\"><\/i>","title":"We\'re Profitable","content":"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'features.element',
            'data_values' => '{"icon":"<i class=\"fas fa-lock\"><\/i>","title":"We\'re Secure","content":"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'plan.content',
            'data_values' => '{"heading":"Membership Plans","subheading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'counter.content',
            'data_values' => '{"has_image":"1","heading":"Best Place To Earn Money Online","sub_heading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!","image":"6263bfd419cc41650704340.png"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'counter.element',
            'data_values' => '{"icon":"<i class=\"far fa-money-bill-alt\"><\/i>","title":"Withdraw","number":"$750K+"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'counter.element',
            'data_values' => '{"icon":"<i class=\"fas fa-users\"><\/i>","title":"Users","number":"50K+"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'counter.element',
            'data_values' => '{"icon":"<i class=\"fas fa-link\"><\/i>","title":"Impression","number":"20M+"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'counter.element',
            'data_values' => '{"icon":"<i class=\"fas fa-ad\"><\/i>","title":"Advertisement","number":"568K+"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'testimonial.content',
            'data_values' => '{"heading":"What People Says","subheading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'testimonial.element',
            'data_values' => '{"has_image":"1","name":"Chris Hamsorth","designation":"PTC Player","comment":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.","image":"6263c2b65eb0b1650705078.jpg"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'testimonial.element',
            'data_values' => '{"has_image":"1","name":"John Doe","designation":"Businessman","comment":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.","image":"6263c2c7a0f131650705095.jpg"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'testimonial.element',
            'data_values' => '{"has_image":"1","name":"Rajendra","designation":"Web Developer","comment":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.v","image":"6263c2dd9b0931650705117.jpg"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'faq.content',
            'data_values' => '{"heading":"Frequently Asked Question","subheading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'faq.element',
            'data_values' => '{"question":"What constitutes a quorum in a PTC?","answer":"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'faq.element',
            'data_values' => '{"question":"What constitutes a positive or negative vote in PTCs?","answer":"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'faq.element',
            'data_values' => '{"question":"Can an abstention vote be cast at a PTC meeting?","answer":"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'faq.element',
            'data_values' => '{"question":"Can a faculty member on OCSA or FML serve on a PTC?","answer":"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'faq.element',
            'data_values' => '{"question":"How will additional members of PTCs be elected in departments with fewer than four tenured faculty members?","answer":"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'faq.element',
            'data_values' => '{"question":"How can absentee ballots be cast?","answer":"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'faq.element',
            'data_values' => '{"question":"Why should members of the PTC fill out vote justification forms explaining their votes?","answer":"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'policy_pages.element',
            'data_values' => '{"title":"Privacy and Policy","details":"<div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">What information do we collect?<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">How do we protect your information?<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">All provided delicate\/credit data is sent through Stripe.<br \/>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Do we disclose any information to outside parties?<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Children\'s Online Privacy Protection Act Compliance<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Changes to our Privacy Policy<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">If we decide to change our privacy policy, we will post those changes on this page.<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">How long we retain your information?<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">What we don\u2019t do with your data<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\/p><\/div>"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'policy_pages.element',
            'data_values' => '{"title":"Payment Policy","details":"<div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">What information do we collect?<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">How do we protect your information?<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">All provided delicate\/credit data is sent through Stripe.<br \/>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Do we disclose any information to outside parties?<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Children\'s Online Privacy Protection Act Compliance<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Changes to our Privacy Policy<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">If we decide to change our privacy policy, we will post those changes on this page.<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">How long we retain your information?<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\/p><\/div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">What we don\u2019t do with your data<\/h3><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\/p><\/div>"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'blog.content',
            'data_values' => '{"heading":"Our Latest Blog","subheading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Dit boek is een verhand eling over de","description":"<p style=\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\/p><p class=\"marked\" style=\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\/p><p style=\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\/p>","image":"6263c534d4d551650705716.jpg"}',
            'view' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Dit boek is een verhand eling over de","description":"<p style=\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\/p><p class=\"marked\" style=\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\/p><p style=\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\/p>","image":"6263c5776573b1650705783.jpg"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Er zijn vele variaties van passages van","description":"<p style=\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\/p><p class=\"marked\" style=\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\/p><p style=\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\/p>","image":"6263c5ca845e61650705866.jpg"}',
            'view' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Er zijn vele variaties van passages van","description":"<p style=\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\/p><p class=\"marked\" style=\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\/p><p style=\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\/p>","image":"6263c5ca845e61650705866.jpg"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Law firm opened near to that gonig to","description":"<p style=\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\/p><p class=\"marked\" style=\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\/p><p style=\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\/p>","image":"6263c5ff668751650705919.jpg"}',
            'view' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Law firm opened near to that gonig to","description":"<p style=\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\/p><p class=\"marked\" style=\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\/p><p style=\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\/p>","image":"6263c61391bf31650705939.jpg"}',
            'view' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'breadcrumb.content',
            'data_values' => '{"has_image":"1","image":"6263cd14a6e8d1650707732.png"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'contact.content',
            'data_values' => '{"heading":"Contact with us","subheading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'contact.element',
            'data_values' => '{"icon":"<i class=\"far fa-envelope\"><\/i>","title":"Email Address","content":"contact@ptcl.com"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'contact.element',
            'data_values' => '{"icon":"<i class=\"fas fa-phone\"><\/i>","title":"Phone Number","content":"+012-345-67890"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'contact.element',
            'data_values' => '{"icon":"<i class=\"fas fa-map-marker-alt\"><\/i>","title":"Office Address","content":"ABC road street, Cool City"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'login.content',
            'data_values' => '{"heading":"Hi. welcome to PTCLab","subheading":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incint ut labore et am, quis nostrud exercitation ullamco laboris"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'register.content',
            'data_values' => '{"heading":"Register New Account","subheading":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incint ut labore et am, quis nostrud exercitation ullamco laboris"}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('frontends')->insert([
            'data_keys' => 'kyc_info.content',
            'data_values' => '{"verification_content":"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic officia quod natus, non dicta perspiciatis, quae repellendus ea illum aut debitis sint amet? Ratione voluptates beatae numquam.","pending_content":"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic officia quod natus, non dicta perspiciatis, quae repellendus ea illum aut debitis sint amet? Ratione voluptates beatae numquam."}',
            'view' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
