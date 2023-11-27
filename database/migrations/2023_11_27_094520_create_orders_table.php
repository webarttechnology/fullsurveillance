<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('coupon_amount')->nullable();
            $table->string('payable_amount')->nullable();
            $table->string('order_generate_id')->nullable();
            $table->string('payment_gateway_id')->nullable();
            $table->text('order_note')->nullable();
            $table->enum('method', ['COD', 'Online'])->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
