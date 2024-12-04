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
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->float("credit");
            $table->dateTime("started_at")
                ->nullable();
            $table->dateTime("expired_at")
                ->nullable();
            $table->unsignedBigInteger("account_id");
            $table->foreign("account_id")
                ->references("id")
                ->on("accounts");

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balances');
    }
};
