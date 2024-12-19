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
            $table->float("price");
            $table->float("discount")
                ->default(0);
            $table->string("color")
                ->nullable();
            $table->string("size")
                ->nullable();
            $table->integer("quantity");

            $table->enum("status", ["waiting", "upcoming", "published", "archive"]);

            $table->unsignedBigInteger("add_by_user_id")
                ->index()
                ->comment("the user who is admin");
            $table->foreign("add_by_user_id")
                ->references("id")
                ->on("users");

            $table->unsignedBigInteger("product_id")
                ->index();
            $table->foreign("product_id")
                ->references("id")
                ->on("products");


            $table->unsignedBigInteger("merchant_id")
                ->index();
            $table->foreign("merchant_id")
                ->references("id")
                ->on("merchants");

            /*            $table->unsignedBigInteger("storehouse_id")
                            ->index();
                        $table->foreign("storehouse_id")
                            ->references("id")
                            ->on("storehouses");

                       $table->unsignedBigInteger("wallet_id")
                            ->index();
                        $table->foreign("wallet_id")
                            ->references("id")
                            ->on("wallets");

                        $table->dateTime("expired_at")
                            ->nullable();*/
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
