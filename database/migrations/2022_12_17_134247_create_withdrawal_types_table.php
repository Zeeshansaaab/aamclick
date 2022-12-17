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
        Schema::create('withdrawal_types', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->string('type', 50);
            $table->string('typekey', 20)->default('');
            $table->string('can_withdraw_in', 20)->comment('0=Everyday otherwise days in month');
            $table->string('status', 20)->comment('1=Active 2= Not active');
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
        Schema::dropIfExists('withdrawal_types');
    }
};
