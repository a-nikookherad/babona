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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger("quantity");
            $table->float("campaign_discount")
                ->default(0);

            $table->unsignedBigInteger("campaign_id")
                ->nullable();
            $table->unsignedBigInteger("merchant_id")
                ->nullable();
            $table->unsignedBigInteger("delivery_id")
                ->nullable();
            $table->unsignedBigInteger("transaction_id")
                ->nullable();

            $table->unsignedBigInteger("order_id")
                ->index();
            $table->foreign("order_id")
                ->references("id")
                ->on("orders");

            $table->unsignedBigInteger("product_detail_id")
                ->index();
            $table->foreign("product_detail_id")
                ->references("id")
                ->on("product_details");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
