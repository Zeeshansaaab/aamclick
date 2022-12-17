<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AdminSeeder::class,
            ExtensionSeeder::class,
            FrontendSeeder::class,
            GatewaySeeder::class,
            GeneralSettingSeeder::class,
            LanguageSeeder::class,
            NotificationTemplateSeeder::class,
            PageSeeder::class,
            WithdrawalTypesSeeder::class
        ]);
        $this->call(UsersTableSeeder::class);
        $this->call(AddProfitToUsersTableSeeder::class);
        $this->call(CalendarsTableSeeder::class);
        $this->call(CommissionLogsTableSeeder::class);
        $this->call(CommitteesTableSeeder::class);
        $this->call(CommitteeInstallmentsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PlansTableSeeder::class);
        $this->call(ReferralsTableSeeder::class);
    }
}
