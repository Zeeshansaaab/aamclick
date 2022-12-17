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
        Schema::create('plans', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->string('name', 40)->nullable();
            $table->decimal('min_price', 28, 8)->default(0);
            $table->decimal('max_price', 28, 8)->default(0);
            $table->integer('amount_return')->default(0);
            $table->integer('min_profit_percent')->default(0);
            $table->integer('max_profit_percent')->default(0);
            $table->integer('profit_bonus_percent')->default(0);
            $table->string('validity')->default('0');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('plans');
    }
};
