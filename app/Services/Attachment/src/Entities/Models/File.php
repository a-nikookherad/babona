<?php

namespace Attachment\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class File extends Model
{
    protected $fillable = [
        "attachable_type",
        "attachable_id",
        "title",
        "path",
        "name",
        "extension",
        "full_name",
        "alt",
        "mime_type",
        "size",
    ];

    public function attachable(): MorphTo
    {
        return $this->morphTo();
    }

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
}
