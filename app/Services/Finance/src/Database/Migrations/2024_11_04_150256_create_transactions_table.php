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

            $table->unsignedBigInteger("from_account_id")
                ->index();
            $table->foreign("from_account_id")
                ->references("id")
                ->on("accounts");

            $table->unsignedBigInteger("treasury_account_id")
                ->nullable();
            $table->foreign("treasury_account_id")
                ->references("id")
                ->on("accounts");

            $table->unsignedBigInteger("to_account_id")
                ->index();
            $table->foreign("to_account_id")
                ->references("id")
                ->on("accounts");

            $table->float("amount");
            $table->boolean("is_done")
                ->default(true);

            $table->unsignedBigInteger("reverse_transaction_id")
                ->nullable();
            $table->foreign("reverse_transaction_id")
                ->references("id")
                ->on("transactions");

            $table->string("description", 250)
                ->nullable();
            $table->string("uuid")
                ->unique();
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
