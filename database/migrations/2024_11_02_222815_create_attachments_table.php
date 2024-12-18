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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->morphs("attachable");
            $table->string("name")
                ->nullable();
            $table->string("absolute_path")
                ->nullable();
            $table->string("relative_path")
                ->nullable();
            $table->string("file_name");
            $table->string("extension");
            $table->string("alt")
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
