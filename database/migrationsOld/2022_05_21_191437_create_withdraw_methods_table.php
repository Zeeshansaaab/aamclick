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
        Schema::create('withdraw_methods', function (Blueprint $table) {
            $table->id();
            $table->integer('form_id')->default(0);
            $table->string('name', 40)->nullable();
            $table->decimal('min_limit', 28,8)->default('0.00000000');
            $table->decimal('max_limit', 28,8)->default('0.00000000');
            $table->decimal('fixed_charge', 28,8)->default('0.00000000');
            $table->decimal('rate', 28,8)->default('0.00000000');
            $table->decimal('percent_charge', 5,2)->nullable();
            $table->string('currency', 40)->nullable();
            $table->string('description', 40)->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('withdraw_methods');
    }
};
