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
        Schema::create('committees', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->bigInteger('committee_plan_id')->default(0);
            $table->string('name')->nullable();
            $table->decimal('amount', 28, 8)->default(0);
            $table->integer('members')->default(0);
            $table->string('validity')->default('0');
            $table->string('amount_return')->default('0');
            $table->tinyInteger('status')->default(0);
            $table->dateTime('committee_open_time')->nullable();
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
        Schema::dropIfExists('committees');
    }
};
