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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->float("amount");
            $table->string("transaction_number")
                ->nullable();

            $table->unsignedBigInteger("user_id_who_make_this_manual")
                ->nullable()
                ->comment("the admin user who paid the payment");
            $table->string("description")
                ->nullable();
            $table->dateTime("paid_at")
                ->nullable();

            $table->unsignedBigInteger("user_id")
                ->index()
                ->comment("the user who paid the payment");
            $table->foreign("user_id")
                ->references("id")
                ->on("users");
            $table->unsignedBigInteger("transaction_id")
                ->index();
            $table->foreign("transaction_id")
                ->references("id")
                ->on("transactions");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
