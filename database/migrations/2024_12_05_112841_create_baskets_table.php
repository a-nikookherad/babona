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
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();

            $table->dateTime("bought_at")
                ->nullable();
            $table->boolean("has_damage_product_to_return")
                ->default(false);
            $table->string("damage_description")
                ->nullable();

            $table->unsignedBigInteger("user_id")
                ->index();
            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->noActionOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baskets');
    }
};
