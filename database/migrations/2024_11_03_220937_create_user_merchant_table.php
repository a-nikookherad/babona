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
        Schema::create('user_merchant', function (Blueprint $table) {
            $table->id();
            $table->string("role")
                ->nullable();
            $table->unsignedBigInteger("user_id")
                ->index();
            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->cascadeOnDelete();

            $table->unsignedBigInteger("merchant_id")
                ->index();
            $table->foreign("merchant_id")
                ->references("id")
                ->on("merchants")
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_merchant');
    }
};
