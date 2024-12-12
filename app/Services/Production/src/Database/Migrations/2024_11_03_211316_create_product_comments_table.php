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
        Schema::create('product_comments', function (Blueprint $table) {
            $table->id();
            $table->string("title")
                ->nullable();
            $table->text("description");
            $table->boolean("can_publish")
                ->default(false);

            $table->boolean("is_suggestion")
                ->nullable()
                ->comment("do they suggest this product");

            $table->enum("stars", [
                1,
                2,
                3,
                4,
                5
            ])
                ->nullable();

            $table->unsignedBigInteger("product_id")
                ->index();
            $table->foreign("product_id")
                ->references("id")
                ->on("products");

            $table->unsignedBigInteger("reply_to_id")
                ->nullable();
            $table->foreign("reply_to_id")
                ->references("id")
                ->on("product_comments");

            $table->unsignedBigInteger("accepted_by_user_id")
                ->nullable();
            $table->foreign("accepted_by_user_id")
                ->references("id")
                ->on("users");

            $table->unsignedBigInteger("user_id")
                ->index();
            $table->foreign("user_id")
                ->references("id")
                ->on("users");

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_comments');
    }
};
