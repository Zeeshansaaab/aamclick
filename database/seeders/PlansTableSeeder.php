<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('plans')->delete();
        
        \DB::table('plans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Free',
                'min_price' => '0.00000000',
                'max_price' => '49.00000000',
                'amount_return' => 6,
                'min_profit_percent' => 6,
                'max_profit_percent' => 16,
                'profit_bonus_percent' => 0,
                'validity' => '0',
                'status' => 1,
                'created_at' => '2022-05-23 04:23:56',
                'updated_at' => '2022-05-25 17:43:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Investor',
                'min_price' => '50.00000000',
                'max_price' => '299.00000000',
                'amount_return' => 6,
                'min_profit_percent' => 6,
                'max_profit_percent' => 16,
                'profit_bonus_percent' => 1,
                'validity' => '0',
                'status' => 1,
                'created_at' => '2022-05-23 04:23:56',
                'updated_at' => '2022-05-25 17:46:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Silver',
                'min_price' => '300.00000000',
                'max_price' => '1999.00000000',
                'amount_return' => 6,
                'min_profit_percent' => 6,
                'max_profit_percent' => 16,
                'profit_bonus_percent' => 2,
                'validity' => '0',
                'status' => 1,
                'created_at' => '2022-05-23 04:23:56',
                'updated_at' => '2022-05-25 17:46:59',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'GOLD',
                'min_price' => '2000.00000000',
                'max_price' => '4999.00000000',
                'amount_return' => 6,
                'min_profit_percent' => 6,
                'max_profit_percent' => 16,
                'profit_bonus_percent' => 1,
                'validity' => '0',
                'status' => 1,
                'created_at' => '2022-05-25 17:48:08',
                'updated_at' => '2022-06-14 21:32:50',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Demo',
                'min_price' => '50.00000000',
                'max_price' => '100.00000000',
                'amount_return' => 5,
                'min_profit_percent' => 4,
                'max_profit_percent' => 8,
                'profit_bonus_percent' => 2,
                'validity' => '0',
                'status' => 0,
                'created_at' => '2022-06-14 21:33:48',
                'updated_at' => '2022-06-14 21:33:48',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Special',
                'min_price' => '5000.00000000',
                'max_price' => '30000.00000000',
                'amount_return' => 6,
                'min_profit_percent' => 7,
                'max_profit_percent' => 17,
                'profit_bonus_percent' => 1,
                'validity' => '6',
                'status' => 0,
                'created_at' => '2022-06-14 22:36:54',
                'updated_at' => '2022-08-09 04:40:23',
            ),
        ));
        
        
    }
}