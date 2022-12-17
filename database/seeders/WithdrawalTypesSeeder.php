<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WithdrawalTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('withdrawal_types')->insert([
            'type'=>'Referal Profit Withdraw',
            'can_withdraw_in'=>'0',
            'can_withdraw_in'=>'0',
            'status'=>'1',
        ]);
    }
}
