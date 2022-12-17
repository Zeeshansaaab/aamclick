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
        Schema::create('committee_plans', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->decimal('amount', 28, 8)->default(0);
            $table->tinyInteger('status')->default(0)->comment('0: pending, 1: active, 2: closed');
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
        Schema::dropIfExists('committee_plans');
    }
};
