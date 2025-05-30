<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public static function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->morphs("attachable");
            $table->string("title")
                ->nullable();
            $table->string("path", 250);
            $table->string("name", 150);
            $table->string("extension", 10);
            $table->string("full_name", 160);
            $table->string("alt", 150)
                ->nullable();
            $table->string("mime_type", 50)
                ->nullable();
            $table->float("size")
                ->nullable();
            $table->timestamps();
        });
    }

    public static function down()
    {
        Schema::dropIfExists('files');
    }
};
