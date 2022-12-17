<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->comment('');
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('deposit_id');
            $table->timestamp('approve_date')->default('2022-09-10 12:04:10');
            $table->timestamp('deposit_date')->default('2022-08-11 12:04:10');
            $table->tinyInteger('status')->default(0);
            $table->decimal('amount', 18)->default(0);
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
