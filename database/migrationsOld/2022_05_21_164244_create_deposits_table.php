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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->default(0);
            $table->integer('method_code')->default(0);
            $table->decimal('amount', 28,8)->default('0.00000000');
            $table->string('method_currency', 40)->nullable();
            $table->decimal('charge', 28,8)->default('0.00000000');
            $table->decimal('rate', 28,8)->default('0.00000000');
            $table->decimal('final_amo', 28,8)->default('0.00000000');
            $table->text('detail')->nullable();
            $table->string('btc_amo', 255)->nullable();
            $table->string('btc_wallet', 255)->nullable();
            $table->string('trx', 40)->nullable();
            $table->integer('try')->default(0);
            $table->integer('type')->default(0);
            $table->tinyInteger('status')->default(0)->comment('1=>success, 2=>pending, 3=>cancel');
            $table->tinyInteger('from_api')->default(0);
            $table->string('admin_feedback', 255)->nullable();
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
        Schema::dropIfExists('deposits');
    }
};
