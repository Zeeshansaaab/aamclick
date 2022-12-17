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
        Schema::create('commission_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('to_id')->default(0);
            $table->integer('from_id')->default(0);
            $table->string('level', 191);
            $table->decimal('amount', 11,2);
            $table->string('type', 40)->nullable();
            $table->string('details', 255)->nullable();
            $table->string('trx', 191);
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
        Schema::dropIfExists('commission_logs');
    }
};
