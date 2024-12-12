<?php

namespace Production\Entities\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $table = "product_comments";
    protected $fillable = [
        "is_suggestion",
        "stars",
        "product_id",
        "user_id",
        "reply_to_id",
        "accepted_by_user_id",
        "can_publish",
        "title",
        "description",

    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, "product_id");
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
