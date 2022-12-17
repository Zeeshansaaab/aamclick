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
        Schema::create('crypto_prices', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('symbol', 10)->nullable();
            $table->string('name', 20)->nullable();
            $table->decimal('usd', 18)->default(0);
            $table->decimal('change_24_hr', 18)->default(0);
            $table->decimal('change_7_day', 18)->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crypto_prices');
    }
};
