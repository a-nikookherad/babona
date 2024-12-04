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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string("color")
                ->nullable();
            $table->float("price");
            $table->unsignedBigInteger("product_id")
                ->index();
            $table->foreign("product_id")
                ->references("id")
                ->on("products");

            $table->unsignedBigInteger("wallet_id")
                ->index();
            $table->foreign("wallet_id")
                ->references("id")
                ->on("wallets");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
