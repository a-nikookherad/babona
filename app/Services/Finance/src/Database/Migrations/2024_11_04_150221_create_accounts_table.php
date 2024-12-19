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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->morphs("accountable");
            $table->string("type")
                ->default("customer");
            $table->boolean("is_active")
                ->default(true);
            $table->unsignedBigInteger("wallet_id")
                ->index();
            $table->foreign("wallet_id")
                ->references("id")
                ->on("wallets");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
