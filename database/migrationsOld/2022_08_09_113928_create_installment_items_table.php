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
        Schema::create('installment_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('installment_id')->nullable();
            $table->decimal('amount', 18,8)->default(0);
            $table->string('payment_type', 18,8)->default('deposit');
            $table->enum('status',['pending','active','inactive'])->default('pending');
            $table->timestamps();
            $table->foreign('installment_id')->references('id')->on('installments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installment_items');
    }
};
