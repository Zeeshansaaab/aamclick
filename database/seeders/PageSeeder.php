<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'id' => 1,
            'name' => 'Home',
            'slug' => '/',
            'tempname' => 'templates.basic.',
            'secs' => null,
            'is_default' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pages')->insert([
            'id' => 4,
            'name' => 'Blog',
            'slug' => 'blog',
            'tempname' => 'templates.basic.',
            'secs' => '',
            'is_default' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('pages')->insert([
            'id' => 5,
            'name' => 'Contact',
            'slug' => 'contact',
            'tempname' => 'templates.basic.',
            'secs' => '',
            'is_default' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('pages')->insert([
            'id' => 19,
            'name' => 'About',
            'slug' => 'about-us',
            'tempname' => 'templates.basic.',
            'secs' => '["about","testimonial","counter","features","faq"]',
            'is_default' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
