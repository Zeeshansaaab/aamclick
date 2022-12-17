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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_id')->default(0);
            $table->integer('ref_by')->default(0)->unsigned();
            $table->integer('daily_limit')->default(0);
            $table->string('firstname', 40)->nullable();
            $table->string('lastname', 40)->nullable();
            $table->string('name', 40)->nullable();
            $table->string('aam_id', 10)->nullable();
            $table->string('email', 40)->unique();
            $table->string('country_code', 40)->nullable();
            $table->string('mobile', 40)->nullable();
            $table->decimal('balance', 28,8)->default('0.00000000');
            $table->decimal('profit_bonus', 28,8)->default('0.00000000');
            $table->decimal('deposit_commission', 28,8)->default('0.00000000');
            $table->decimal('current_profit', 28,8)->default('0.00000000');
            $table->string('password');
            $table->string('image')->nullable();
            $table->text('address')->nullable()->comment('contains full address');
            $table->tinyInteger('status')->default(1)->comment('0: banned, 1: active');
            $table->text('kyc_data')->nullable();
            $table->tinyInteger('kv')->default(0)->comment('0: KYC Unverified, 2: KYC pending, 1: KYC verified');
            $table->tinyInteger('ev')->default(0)->comment('0: email unverified, 1: email verified');
            $table->tinyInteger('sv')->default(0)->comment('0: mobile unverified, 1: mobile verified');
            $table->tinyInteger('reg_step')->default(0);
            $table->string('ver_code', 40)->nullable()->comment('stores verification code');
            $table->dateTime('ver_code_send_at')->nullable()->comment('verification send time');
            $table->tinyInteger('ts')->default(0)->comment('0: 2fa off, 1: 2fa on');
            $table->tinyInteger('tv')->default(1)->comment('0: 2fa unverified, 1: 2fa verified');
            $table->string('tsc')->nullable();
            $table->string('ban_reason')->nullable();
            $table->dateTime('expire_date')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
