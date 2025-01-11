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
        Schema::create('shipping_stages', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description")
                ->nullable();
            $table->enum("status", [
                "doing",
                "done",
            ])
                ->nullable();

            $table->unsignedBigInteger("done_with_user_id")
                ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_stages');
    }
};