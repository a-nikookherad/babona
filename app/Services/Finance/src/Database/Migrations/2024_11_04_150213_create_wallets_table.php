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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("fa_name")
                ->nullable();
            $table->string("instrument")
                ->nullable();
            $table->boolean("is_default")
                ->default(false);
            $table->boolean("is_permanent")
                ->default(true);
            $table->smallInteger("reset_count_per_year")
                ->default(1);
            $table->boolean("transaction_accept_manual")
                ->default(false);
            $table->float("interest_rate")
                ->nullable();
            $table->unsignedSmallInteger("club_id")
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
        Schema::dropIfExists('wallets');
    }
};
