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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();

            $table->string("size", 200)
                ->nullable();
            $table->string("color", 100)
                ->nullable();

            $table->float("price");

            $table->float("discount")
                ->default(0);
            $table->dateTime("discount_expired_at")
                ->nullable();

            $table->unsignedInteger("quantity")
                ->nullable();

            $table->float("net_price")
                ->nullable();

            $table->unsignedBigInteger("product_id")
                ->index();
            $table->unsignedBigInteger("merchant_id")
                ->index();

            $table->foreign("product_id")
                ->references("id")
                ->on("products");
            $table->foreign("merchant_id")
                ->references("id")
                ->on("merchants");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
