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
            $table->string("name")
                ->nullable();
            $table->string("fa_name")
                ->nullable();
            $table->string("material")
                ->nullable();
            $table->string("style")
                ->nullable();
            $table->string("code")
                ->nullable();
            $table->string("barcode")
                ->nullable();
            $table->enum("status", [
                "upcoming",
                "waiting",
                "published",
                "archive",
            ]);
            $table->string("brief")
                ->nullable();
            $table->text("description")
                ->nullable();

            $table->json("jsonld")
                ->nullable();
            $table->string("meta_tag_title")
                ->nullable();
            $table->string("meta_tag_description")
                ->nullable();
            $table->string("meta_tag_keywords")
                ->nullable();

            $table->unsignedBigInteger("category_id")
                ->index();
            $table->foreign("category_id")
                ->references("id")
                ->on("categories");


            $table->softDeletes();
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
