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
        Schema::create('basket_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("basket_id")
                ->index();
            $table->foreign("basket_id")
                ->references("id")
                ->on("baskets");

            $table->unsignedBigInteger("price_id")
                ->index();
            $table->foreign("price_id")
                ->references("id")
                ->on("prices");
            $table->integer("quantity");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basket_prices');
    }
};
