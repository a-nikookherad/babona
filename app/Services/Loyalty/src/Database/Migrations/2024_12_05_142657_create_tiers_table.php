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
        Schema::create('tiers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("fa_name");
            $table->string("description")
                ->nullable();
            $table->float("max_buy");
            $table->dateTime("started_at");
            $table->dateTime("expired_at");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiers');
    }
};
