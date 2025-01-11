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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();

            $table->string("label")
                ->nullable();

            $table->uuid("uuid")
                ->nullable();

            $table->unsignedBigInteger("carrier_id")
                ->comment("user id with carrier role")
                ->nullable();

            $table->enum("status", [
                "doing",
                "done",
            ])->default("doing");

            $table->enum("type", [
                "reverse",
                "normal",
            ])->default("normal");

            $table->unsignedBigInteger("source_id")
                ->comment("address id")
                ->nullable();

            $table->unsignedBigInteger("destination_id")
                ->comment("address id")
                ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};
