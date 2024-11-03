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
            $table->string("name")
                ->nullable();
            $table->float("total_price")
                ->nullable();
            $table->boolean("is_active")
                ->default(true);
            $table->unsignedBigInteger("merchant_id")
                ->index();
            $table->foreign("merchant_id")
                ->references("id")
                ->on("merchants");
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
