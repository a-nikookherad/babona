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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->morphs("payable");

            $table->boolean("is_done")
                ->default(true);

            $table->unsignedBigInteger("from_account_id");
            $table->foreign("from_account_id")
                ->references("id")
                ->on("accounts");

            $table->unsignedBigInteger("to_account_id");
            $table->foreign("to_account_id")
                ->references("id")
                ->on("accounts");

            $table->float("amount");
            $table->string("uuid",20);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
