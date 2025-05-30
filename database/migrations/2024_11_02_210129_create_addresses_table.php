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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->morphs("addressable");

            $table->enum("type", [
                "work_place",
                "home",
            ])
                ->default("home");

            $table->boolean("is_active")
                ->default(false);

            $table->string("longitude")
                ->nullable();

            $table->string("latitude")
                ->nullable();

            $table->string("address")
                ->nullable();
            $table->unsignedInteger("place")
                ->nullable();
            $table->string("postal_code", 12)
                ->nullable();
            $table->string("phone_number", 20)
                ->nullable();
            $table->unsignedBigInteger("city_id")
                ->index();
            $table->foreign("city_id")
                ->references("id")
                ->on("cities");

            $table->unsignedBigInteger("state_id")
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
