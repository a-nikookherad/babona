<?php

namespace Finance\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "is_done",
        "from_account_id",
        "treasury_account_id",
        "reverse_transaction_id",
        "to_account_id",
        "amount",
        "uuid",
    ];

    public function fromAccount(): BelongsTo
    {
        return $this->belongsTo(Account::class, "from_account_id");
    }

    public function reverseTransaction(): HasMany
    {
        return $this->hasMany(Transaction::class, "reverse_transaction_id");
    }

    public function reverseOfTransaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class, "reverse_transaction_id");
    }

    public function toAccount(): BelongsTo
    {
        return $this->belongsTo(Account::class, "to_account_id");
    }
}
