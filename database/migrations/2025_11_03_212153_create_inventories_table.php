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
        Schema::create('inventories', function (Blueprint $table) {

            $table->unsignedBigInteger("merchant_id")
                ->index();
            $table->foreign("merchant_id")
                ->references("id")
                ->on("merchants");

            $table->unsignedBigInteger("add_by_user_id")
                ->index();
            $table->foreign("add_by_user_id")
                ->references("id")
                ->on("users");

            $table->integer('minimum_stock')
                ->comment("حداقل موجودی برای هشدار")
                ->default(3);

            $table->unsignedBigInteger("product_detail_id")
                ->index();
            $table->foreign('product_detail_id')
                ->references("id")
                ->on("product_details")
                ->onDelete('cascade');

            $table->unsignedInteger('stock')
                ->comment("تعداد موجودی فعلی")
                ->default(0);

            $table->float("price")
                ->nullable();

            $table->unsignedInteger('reserved')  // رزرو شده برای سفارشات
            ->default(0);

            $table->unsignedInteger('sold')  // فروخته‌شده تاکنون (optional)
            ->default(0);

            $table->string('location')  // موقعیت در انبار (مثلاً انبار شمالی، قفسه A2 و ...)
            ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
