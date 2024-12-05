<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("order_id")
                ->index();
            $table->foreign("order_id")
                ->references("id")
                ->on("orders");

            $table->unsignedBigInteger("price_id")
                ->index();
            $table->foreign("price_id")
                ->references("id")
                ->on("prices");

            $table->unsignedSmallInteger("quantity");

            $table->unsignedBigInteger("reversed_by_admin_user_id")
                ->nullable();
            $table->unsignedSmallInteger("reversed_quantity");
            $table->dateTime("reversed_at")
                ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_prices');
    }
};
