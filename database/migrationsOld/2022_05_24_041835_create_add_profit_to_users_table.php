<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_profit_to_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('deposit_id');
            $table->timestamp('approve_date')->default(Carbon::now()->addDays(30));
            $table->timestamp('deposit_date')->default(Carbon::now());
            $table->tinyInteger('status')->default(0);
            $table->decimal('amount',18,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_profit_to_users');
    }
};
