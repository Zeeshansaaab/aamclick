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
        Schema::create('wuas_general_settings', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->string('website_name')->nullable();
            $table->string('website_logo', 600)->nullable();
            $table->string('website_description')->nullable();
            $table->string('active_template')->default('basic');
            $table->string('copyright')->nullable();
            $table->string('cur_text')->default('USD');
            $table->string('cur_sign')->default('$');
            $table->tinyInteger('force_ssl')->default(0);
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
        Schema::dropIfExists('wuas_general_settings');
    }
};
