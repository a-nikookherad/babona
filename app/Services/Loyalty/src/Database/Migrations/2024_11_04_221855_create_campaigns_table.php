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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string("name")
                ->nullable();
            $table->string("fa_name");
            $table->string("description")
                ->nullable();
            $table->float("discount_percentage");
            $table->float("maximum_discount")
                ->nullable();
            $table->enum("status", ["waiting", "upcoming", "published", "archive"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
