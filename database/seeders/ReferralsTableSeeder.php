<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReferralsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('referrals')->delete();
        
        \DB::table('referrals')->insert(array (
            0 => 
            array (
                'id' => 12,
                'plan_id' => 1,
                'level' => 1,
                'percent' => '1.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:49:39',
                'updated_at' => '2022-05-25 17:49:39',
            ),
            1 => 
            array (
                'id' => 13,
                'plan_id' => 1,
                'level' => 2,
                'percent' => '1.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:49:39',
                'updated_at' => '2022-05-25 17:49:39',
            ),
            2 => 
            array (
                'id' => 14,
                'plan_id' => 1,
                'level' => 3,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:49:39',
                'updated_at' => '2022-05-25 17:49:39',
            ),
            3 => 
            array (
                'id' => 15,
                'plan_id' => 1,
                'level' => 4,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:49:39',
                'updated_at' => '2022-05-25 17:49:39',
            ),
            4 => 
            array (
                'id' => 16,
                'plan_id' => 2,
                'level' => 1,
                'percent' => '2.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:53:25',
                'updated_at' => '2022-05-25 17:53:25',
            ),
            5 => 
            array (
                'id' => 17,
                'plan_id' => 2,
                'level' => 2,
                'percent' => '1.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:53:25',
                'updated_at' => '2022-05-25 17:53:25',
            ),
            6 => 
            array (
                'id' => 18,
                'plan_id' => 2,
                'level' => 3,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:53:25',
                'updated_at' => '2022-05-25 17:53:25',
            ),
            7 => 
            array (
                'id' => 19,
                'plan_id' => 2,
                'level' => 4,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:53:25',
                'updated_at' => '2022-05-25 17:53:25',
            ),
            8 => 
            array (
                'id' => 20,
                'plan_id' => 3,
                'level' => 1,
                'percent' => '3.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:53:47',
                'updated_at' => '2022-05-25 17:53:47',
            ),
            9 => 
            array (
                'id' => 21,
                'plan_id' => 3,
                'level' => 2,
                'percent' => '1.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:53:47',
                'updated_at' => '2022-05-25 17:53:47',
            ),
            10 => 
            array (
                'id' => 22,
                'plan_id' => 3,
                'level' => 3,
                'percent' => '1.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:53:47',
                'updated_at' => '2022-05-25 17:53:47',
            ),
            11 => 
            array (
                'id' => 23,
                'plan_id' => 3,
                'level' => 4,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:53:47',
                'updated_at' => '2022-05-25 17:53:47',
            ),
            12 => 
            array (
                'id' => 24,
                'plan_id' => 4,
                'level' => 1,
                'percent' => '6.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:54:00',
                'updated_at' => '2022-05-25 17:54:00',
            ),
            13 => 
            array (
                'id' => 25,
                'plan_id' => 4,
                'level' => 2,
                'percent' => '4.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:54:00',
                'updated_at' => '2022-05-25 17:54:00',
            ),
            14 => 
            array (
                'id' => 26,
                'plan_id' => 4,
                'level' => 3,
                'percent' => '2.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:54:00',
                'updated_at' => '2022-05-25 17:54:00',
            ),
            15 => 
            array (
                'id' => 27,
                'plan_id' => 4,
                'level' => 4,
                'percent' => '1.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-05-25 17:54:00',
                'updated_at' => '2022-05-25 17:54:00',
            ),
            16 => 
            array (
                'id' => 48,
                'plan_id' => 1,
                'level' => 1,
                'percent' => '1.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:25',
                'updated_at' => '2022-05-25 18:29:25',
            ),
            17 => 
            array (
                'id' => 49,
                'plan_id' => 1,
                'level' => 2,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:25',
                'updated_at' => '2022-05-25 18:29:25',
            ),
            18 => 
            array (
                'id' => 50,
                'plan_id' => 1,
                'level' => 3,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:25',
                'updated_at' => '2022-05-25 18:29:25',
            ),
            19 => 
            array (
                'id' => 51,
                'plan_id' => 1,
                'level' => 4,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:25',
                'updated_at' => '2022-05-25 18:29:25',
            ),
            20 => 
            array (
                'id' => 52,
                'plan_id' => 2,
                'level' => 1,
                'percent' => '1.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:34',
                'updated_at' => '2022-05-25 18:29:34',
            ),
            21 => 
            array (
                'id' => 53,
                'plan_id' => 2,
                'level' => 2,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:34',
                'updated_at' => '2022-05-25 18:29:34',
            ),
            22 => 
            array (
                'id' => 54,
                'plan_id' => 2,
                'level' => 3,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:34',
                'updated_at' => '2022-05-25 18:29:34',
            ),
            23 => 
            array (
                'id' => 55,
                'plan_id' => 2,
                'level' => 4,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:34',
                'updated_at' => '2022-05-25 18:29:34',
            ),
            24 => 
            array (
                'id' => 56,
                'plan_id' => 3,
                'level' => 1,
                'percent' => '1.50',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:50',
                'updated_at' => '2022-05-25 18:29:50',
            ),
            25 => 
            array (
                'id' => 57,
                'plan_id' => 3,
                'level' => 2,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:50',
                'updated_at' => '2022-05-25 18:29:50',
            ),
            26 => 
            array (
                'id' => 58,
                'plan_id' => 3,
                'level' => 3,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:50',
                'updated_at' => '2022-05-25 18:29:50',
            ),
            27 => 
            array (
                'id' => 59,
                'plan_id' => 3,
                'level' => 4,
                'percent' => '0.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:29:50',
                'updated_at' => '2022-05-25 18:29:50',
            ),
            28 => 
            array (
                'id' => 60,
                'plan_id' => 4,
                'level' => 1,
                'percent' => '4.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:30:04',
                'updated_at' => '2022-05-25 18:30:04',
            ),
            29 => 
            array (
                'id' => 61,
                'plan_id' => 4,
                'level' => 2,
                'percent' => '2.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:30:04',
                'updated_at' => '2022-05-25 18:30:04',
            ),
            30 => 
            array (
                'id' => 62,
                'plan_id' => 4,
                'level' => 3,
                'percent' => '1.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:30:04',
                'updated_at' => '2022-05-25 18:30:04',
            ),
            31 => 
            array (
                'id' => 63,
                'plan_id' => 4,
                'level' => 4,
                'percent' => '1.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-05-25 18:30:04',
                'updated_at' => '2022-05-25 18:30:04',
            ),
            32 => 
            array (
                'id' => 64,
                'plan_id' => 6,
                'level' => 1,
                'percent' => '6.00',
                'status' => 0,
                'commission_type' => 'plan_subscribe_commission',
                'created_at' => '2022-06-14 22:38:30',
                'updated_at' => '2022-06-14 22:38:30',
            ),
            33 => 
            array (
                'id' => 65,
                'plan_id' => 6,
                'level' => 2,
                'percent' => '4.00',
                'status' => 0,
                'commission_type' => 'plan_subscribe_commission',
                'created_at' => '2022-06-14 22:38:30',
                'updated_at' => '2022-06-14 22:38:30',
            ),
            34 => 
            array (
                'id' => 66,
                'plan_id' => 6,
                'level' => 3,
                'percent' => '3.00',
                'status' => 0,
                'commission_type' => 'plan_subscribe_commission',
                'created_at' => '2022-06-14 22:38:30',
                'updated_at' => '2022-06-14 22:38:30',
            ),
            35 => 
            array (
                'id' => 67,
                'plan_id' => 6,
                'level' => 4,
                'percent' => '2.00',
                'status' => 0,
                'commission_type' => 'plan_subscribe_commission',
                'created_at' => '2022-06-14 22:38:30',
                'updated_at' => '2022-06-14 22:38:30',
            ),
            36 => 
            array (
                'id' => 68,
                'plan_id' => 6,
                'level' => 1,
                'percent' => '8.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-06-14 22:39:51',
                'updated_at' => '2022-06-14 22:39:51',
            ),
            37 => 
            array (
                'id' => 69,
                'plan_id' => 6,
                'level' => 2,
                'percent' => '5.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-06-14 22:39:51',
                'updated_at' => '2022-06-14 22:39:51',
            ),
            38 => 
            array (
                'id' => 70,
                'plan_id' => 6,
                'level' => 3,
                'percent' => '3.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-06-14 22:39:51',
                'updated_at' => '2022-06-14 22:39:51',
            ),
            39 => 
            array (
                'id' => 71,
                'plan_id' => 6,
                'level' => 4,
                'percent' => '2.00',
                'status' => 0,
                'commission_type' => 'deposit_commission',
                'created_at' => '2022-06-14 22:39:51',
                'updated_at' => '2022-06-14 22:39:51',
            ),
            40 => 
            array (
                'id' => 72,
                'plan_id' => 6,
                'level' => 1,
                'percent' => '6.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-06-14 22:41:02',
                'updated_at' => '2022-06-14 22:41:02',
            ),
            41 => 
            array (
                'id' => 73,
                'plan_id' => 6,
                'level' => 2,
                'percent' => '4.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-06-14 22:41:02',
                'updated_at' => '2022-06-14 22:41:02',
            ),
            42 => 
            array (
                'id' => 74,
                'plan_id' => 6,
                'level' => 3,
                'percent' => '3.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-06-14 22:41:02',
                'updated_at' => '2022-06-14 22:41:02',
            ),
            43 => 
            array (
                'id' => 75,
                'plan_id' => 6,
                'level' => 4,
                'percent' => '2.00',
                'status' => 0,
                'commission_type' => 'profit_bonus',
                'created_at' => '2022-06-14 22:41:02',
                'updated_at' => '2022-06-14 22:41:02',
            ),
        ));
        
        
    }
}