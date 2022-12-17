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
        Schema::create('committee_members', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('committee_id')->default(0);
            $table->integer('committee_number')->default(0);
            $table->integer('tcs')->default(0)->comment('total committee installments');
            $table->tinyInteger('status')->default(0)->comment('0: pending, 1: active, 2: rejected');
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
        Schema::dropIfExists('committee_members');
    }
};
