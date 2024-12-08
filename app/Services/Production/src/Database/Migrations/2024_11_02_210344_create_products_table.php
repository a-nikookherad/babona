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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("slug");
            $table->string("name");
            $table->string("fa_name")
                ->nullable();
            $table->string("brief")
                ->nullable();
            $table->text("description")
                ->nullable();
            $table->enum("status", [
                "waiting",
                "published",
                "archive",
            ]);
            $table->json("jsonld")
                ->nullable();

            $table->unsignedBigInteger("category_id")
                ->index();
            $table->foreign("category_id")
                ->references("id")
                ->on("categories");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
