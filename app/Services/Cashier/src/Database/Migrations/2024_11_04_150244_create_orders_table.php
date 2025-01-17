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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime("delivered_at")
                ->nullable();

            $table->dateTime("paid_at")
                ->nullable();

            $table->string("description")
                ->nullable();
            $table->unsignedBigInteger("paid_by_admin_user_id")
                ->nullable();

            $table->unsignedBigInteger("delivery_id")
                ->nullable();
            /*            $table->foreign("delivery_id")
                            ->references("id")
                            ->on("deliveries");*/

            $table->unsignedBigInteger("basket_id")
                ->index();

            $table->unsignedBigInteger("user_id")
                ->index();
            $table->foreign("user_id")
                ->references("id")
                ->on("users");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
