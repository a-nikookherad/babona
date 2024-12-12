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

            $table->unsignedBigInteger("storehouse_id")
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
                ->nullable();
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
