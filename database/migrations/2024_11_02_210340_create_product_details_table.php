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

            $table->unsignedBigInteger("merchant_id")
                ->index();

            $table->unsignedBigInteger("product_id")
                ->index();

            $table->string("size", 250)
                ->nullable();

            $table->string("color", 250)
                ->nullable();

            $table->float("price");


            $table->float("discount")
                ->comment("percentage")
                ->default(0);

            $table->dateTime("discount_expired_at")
                ->nullable();

            $table->unsignedBigInteger("add_by_user_id")
                ->comment("the user who is admin");

            $table->foreign("merchant_id")
                ->references("id")
                ->on("merchants");

            $table->foreign("add_by_user_id")
                ->references("id")
                ->on("users");

            $table->foreign("product_id")
                ->references("id")
                ->on("products");

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
