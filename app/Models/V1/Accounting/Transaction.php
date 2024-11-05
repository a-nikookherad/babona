<?php

namespace App\Models\V1\Accounting;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
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
