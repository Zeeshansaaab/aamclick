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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name', 40)->nullable();
            $table->string('cur_text', 40)->nullable()->comment('currency text');
            $table->string('cur_sym', 40)->nullable()->comment('currency symbol');
            $table->string('email_from', 40)->nullable();
            $table->text('email_template')->nullable();
            $table->string('sms_body', 255)->nullable();
            $table->string('sms_from', 255)->nullable();
            $table->string('base_color', 40)->nullable();
            $table->string('secondary_color', 40)->nullable();
            $table->text('mail_config')->nullable()->comment('email configuration');
            $table->text('sms_config')->nullable()->comment('sms configuration');
            $table->text('global_shorcodes')->nullable();
            $table->tinyInteger('kv')->default(0);
            $table->tinyInteger('ev')->default(0)->comment('email verification, 0 - dont check, 1 - check');
            $table->tinyInteger('en')->default(0)->comment('email notification, 0 - dont send, 1 - send');
            $table->tinyInteger('sv')->default(0)->comment('mobile verication, 0 - dont check, 1 - check');
            $table->tinyInteger('sn')->default(0)->comment('sms notification, 0 - dont send, 1 - send');
            $table->tinyInteger('force_ssl')->default(0);
            $table->tinyInteger('maintenance_mode')->default(0);
            $table->tinyInteger('secure_password')->default(0);
            $table->tinyInteger('agree')->default(0);
            $table->tinyInteger('registration')->default(0)->comment('0: Off , 1: On');
            $table->string('active_template', 40)->nullable();
            $table->tinyInteger('deposit_commission')->default(0);
            $table->tinyInteger('plan_subscribe_commission')->default(0);
            $table->text('system_info')->nullable();
            $table->decimal('registration_bonus', 28,8)->default('0.00000000');
            $table->decimal('bt_fixed', 28,8)->default('0.00000000');
            $table->decimal('bt_percent', 28,8)->default('0.00000000');
            $table->tinyInteger('balance_transfer')->default(0);
            $table->integer('default_plan')->default(0);
            $table->tinyInteger('user_ads_post')->default(0);
            $table->integer('profit_bonus_percentage')->default(0);
            $table->tinyInteger('profit_bonus_days')->default(0);
            $table->text('ads_setting')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
};
