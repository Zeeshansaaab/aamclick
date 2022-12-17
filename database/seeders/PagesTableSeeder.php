<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Home',
                'slug' => '/',
                'tempname' => 'templates.basic.',
                'secs' => NULL,
                'is_default' => 1,
                'created_at' => '2022-05-23 04:15:41',
                'updated_at' => '2022-05-23 04:15:41',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Blog',
                'slug' => 'blog',
                'tempname' => 'templates.basic.',
                'secs' => '',
                'is_default' => 1,
                'created_at' => '2022-05-23 04:15:41',
                'updated_at' => '2022-05-23 04:15:41',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Contact',
                'slug' => 'contact',
                'tempname' => 'templates.basic.',
                'secs' => '',
                'is_default' => 1,
                'created_at' => '2022-05-23 04:15:41',
                'updated_at' => '2022-05-23 04:15:41',
            ),
            3 => 
            array (
                'id' => 19,
                'name' => 'About',
                'slug' => 'about-us',
                'tempname' => 'templates.basic.',
                'secs' => '["about","testimonial","counter","features","faq"]',
                'is_default' => 0,
                'created_at' => '2022-05-23 04:15:41',
                'updated_at' => '2022-05-23 04:15:41',
            ),
            4 => 
            array (
                'id' => 20,
                'name' => 'Home',
                'slug' => '/',
                'tempname' => 'templates.coinjet.',
                'secs' => '["why-chose","how-it-works","about","crypto-price","plan","counter","blog"]',
                'is_default' => 1,
                'created_at' => '2022-05-23 04:15:41',
                'updated_at' => '2022-05-23 04:15:41',
            ),
            5 => 
            array (
                'id' => 21,
                'name' => 'Blog',
                'slug' => 'blog',
                'tempname' => 'templates.coinjet.',
                'secs' => '',
                'is_default' => 1,
                'created_at' => '2022-05-23 04:15:41',
                'updated_at' => '2022-05-23 04:15:41',
            ),
            6 => 
            array (
                'id' => 22,
                'name' => 'Contact',
                'slug' => 'contact',
                'tempname' => 'templates.coinjet.',
                'secs' => '',
                'is_default' => 1,
                'created_at' => '2022-05-23 04:15:41',
                'updated_at' => '2022-05-23 04:15:41',
            ),
            7 => 
            array (
                'id' => 23,
                'name' => 'About',
                'slug' => 'about-us',
                'tempname' => 'templates.coinjet.',
                'secs' => '["about","testimonial","counter","features","faq"]',
                'is_default' => 0,
                'created_at' => '2022-05-23 04:15:41',
                'updated_at' => '2022-05-23 04:15:41',
            ),
        ));
        
        
    }
}