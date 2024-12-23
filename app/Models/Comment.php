<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    protected $fillable = [
        "title",
        "description",
        "can_publish",
        "is_admin",
        "accepted_by_user_id",
        "reply_to_id",
        "user_id",
    ];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function reply(): BelongsTo
    {
        return $this->belongsTo(Comment::class, "reply_to_id", "id");
    }

    public function acceptByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, "accepted_by_user_id");
    }
}
