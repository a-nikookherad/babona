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
        Schema::create('storehouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("product_id")
                ->index();
            $table->foreign("product_id")
                ->references("id")
                ->on("products");

            $table->string("color")
                ->nullable();
            $table->string("size")
                ->nullable();
            $table->integer("quantity");

            $table->boolean("is_active")
                ->default(true);

            $table->unsignedBigInteger("add_by_user_id");
            $table->foreign("add_by_user_id")
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
        Schema::dropIfExists('storehouses');
    }
};
