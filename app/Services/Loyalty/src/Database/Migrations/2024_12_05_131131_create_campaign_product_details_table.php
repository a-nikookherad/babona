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
        Schema::create('campaign_product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("campaign_id")
                ->index();
            $table->foreign("campaign_id")
                ->references("id")
                ->on("campaigns");

            $table->unsignedBigInteger("product_detail_id")
                ->index();
            $table->foreign("product_detail_id")
                ->references("id")
                ->on("product_details");

            $table->unsignedSmallInteger("percent");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_product_details');
    }
};
