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
        Schema::create( 'basket_product_details', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity");
            $table->unsignedBigInteger("basket_id")
                ->index();

            $table->unsignedBigInteger("product_detail_id")
                ->index();

            $table->foreign("basket_id")
                ->references("id")
                ->on("baskets");
            $table->foreign("product_detail_id")
                ->references("id")
                ->on("product_details");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basket_product_details');
    }
};
