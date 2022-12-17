<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' => 'English',
            'code' => 'en',
            'icon' => '5f15968db08911595250317.png',
            'text_align' => 0,
            'is_default' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('languages')->insert([
            'name' => 'Hindi',
            'code' => 'hn',
            'icon' => null,
            'text_align' => 0,
            'is_default' => 01,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('languages')->insert([
            'name' => 'Bangla',
            'code' => 'bn',
            'icon' => null,
            'text_align' => 0,
            'is_default' => 01,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('languages')->insert([
            'name' => 'Spanish',
            'code' => 'es',
            'icon' => null,
            'text_align' => 0,
            'is_default' => 01,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
