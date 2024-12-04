<?php

namespace Finance\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "payment_id",
    ];

    public function fromAccount(): BelongsTo
    {
        return $this->belongsTo(Account::class, "from_account_id");
    }

    public function toAccount(): BelongsTo
    {
        return $this->belongsTo(Account::class, "to_account_id");
    }
}
