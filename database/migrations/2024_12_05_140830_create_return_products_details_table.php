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
        Schema::create('return_products', function (Blueprint $table) {
            $table->id();

            $table->string("reason")
                ->nullable();

            $table->string("description")
                ->nullable();

            $table->dateTime("request_at")
                ->nullable();

            $table->dateTime("return_at")
                ->nullable();

            $table->unsignedBigInteger("basket_id")
                ->index();
            $table->foreign("basket_id")
                ->references("id")
                ->on("baskets");

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_products');
    }
};
