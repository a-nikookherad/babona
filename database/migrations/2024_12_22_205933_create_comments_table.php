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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->morphs("commentable");

            $table->string("title", 50)
                ->nullable();
            $table->string("description", 500);
            $table->boolean("can_publish")
                ->default(false);
            $table->boolean("is_admin")
                ->default(false);

            $table->unsignedBigInteger("accepted_by_user_id")
                ->nullable();

            $table->unsignedBigInteger("reply_to_id")
                ->nullable();

            $table->unsignedBigInteger("user_id")
                ->index();

            $table->foreign("accepted_by_user_id")
                ->references("id")
                ->on("users");

            $table->foreign("reply_to_id")
                ->references("id")
                ->on("comments");

            $table->foreign("user_id")
                ->references("id")
                ->on("users");

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
