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
        Schema::create('ranks', function (Blueprint $table) {
            $table->id();
            $table->morphs("rankable");
            $table->boolean("i_suggest")
                ->nullable()
                ->comment("do I suggest the product");
            $table->enum("stars", [
                1,
                2,
                3,
                4,
                5
            ])
                ->nullable();

            $table->unsignedBigInteger("user_id")
                ->index();
            $table->foreign("user_id")
                ->references("id")
                ->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ranks');
    }
};
