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
        Schema::create('storehouse_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("total_count");
            $table->float("total_price");
            $table->float("each_one_price");
            $table->unsignedInteger("exist_count");
            $table->string("color");
            $table->unsignedBigInteger("storehouse_id")
                ->index();
            $table->foreign("storehouse_id")
                ->references("id")
                ->on("storehouses");

            $table->unsignedBigInteger("product_id")
                ->index();
            $table->foreign("product_id")
                ->references("id")
                ->on("products");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storehouse_products');
    }
};
