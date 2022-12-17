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
        Schema::create('installments', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->index('installments_user_id_foreign');
            $table->string('name', 25);
            $table->string('phone', 25);
            $table->string('email', 25);
            $table->string('screenshot', 150);
            $table->string('address', 25);
            $table->decimal('amount', 18, 8)->default(0);
            $table->enum('status', ['active', 'inactive', 'pending']);
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
        Schema::dropIfExists('installments');
    }
};
