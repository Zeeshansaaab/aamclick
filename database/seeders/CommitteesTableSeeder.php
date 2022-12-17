<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommitteesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('committees')->delete();
        
        \DB::table('committees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'committee_plan_id' => 1,
                'name' => '100 dollar',
                'amount' => '100.00000000',
                'members' => 0,
                'validity' => '10',
                'amount_return' => '10',
                'status' => 1,
                'committee_open_time' => '2022-08-22 10:00:24',
                'created_at' => '2022-07-18 14:52:24',
                'updated_at' => '2022-08-15 23:24:45',
            ),
            1 => 
            array (
                'id' => 2,
                'committee_plan_id' => 10,
                'name' => '1000 dollar',
                'amount' => '1000.00000000',
                'members' => 0,
                'validity' => '10',
                'amount_return' => '1000',
                'status' => 1,
                'committee_open_time' => '2022-11-14 20:18:00',
                'created_at' => '2022-09-15 05:18:47',
                'updated_at' => '2022-09-15 05:18:47',
            ),
            2 => 
            array (
                'id' => 3,
                'committee_plan_id' => 2,
                'name' => '200 dollar',
                'amount' => '200.00000000',
                'members' => 4,
                'validity' => '10',
                'amount_return' => '200',
                'status' => 1,
                'committee_open_time' => '2022-08-14 20:19:00',
                'created_at' => '2022-09-15 05:19:32',
                'updated_at' => '2022-12-14 06:40:41',
            ),
            3 => 
            array (
                'id' => 4,
                'committee_plan_id' => 11,
                'name' => '50 dollar',
                'amount' => '50.00000000',
                'members' => 5,
                'validity' => '10',
                'amount_return' => '50',
                'status' => 1,
                'committee_open_time' => '2022-09-14 20:21:00',
                'created_at' => '2022-09-15 05:21:27',
                'updated_at' => '2022-10-06 06:09:27',
            ),
            4 => 
            array (
                'id' => 5,
                'committee_plan_id' => 3,
                'name' => '300 dollar',
                'amount' => '300.00000000',
                'members' => 2,
                'validity' => '10',
                'amount_return' => '300',
                'status' => 1,
                'committee_open_time' => '2022-06-14 20:32:00',
                'created_at' => '2022-09-15 05:32:42',
                'updated_at' => '2022-09-19 22:59:30',
            ),
            5 => 
            array (
                'id' => 6,
                'committee_plan_id' => 4,
                'name' => '400 dollar',
                'amount' => '400.00000000',
                'members' => 0,
                'validity' => '10',
                'amount_return' => '400',
                'status' => 1,
                'committee_open_time' => '2022-07-14 20:33:00',
                'created_at' => '2022-09-15 05:33:19',
                'updated_at' => '2022-09-15 05:33:19',
            ),
            6 => 
            array (
                'id' => 7,
                'committee_plan_id' => 5,
                'name' => '500 dollar',
                'amount' => '500.00000000',
                'members' => 3,
                'validity' => '10',
                'amount_return' => '500',
                'status' => 1,
                'committee_open_time' => '2022-07-14 20:34:00',
                'created_at' => '2022-09-15 05:34:23',
                'updated_at' => '2022-12-14 06:43:26',
            ),
        ));
        
        
    }
}