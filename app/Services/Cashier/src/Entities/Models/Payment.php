<?php

namespace Cashier\Entities\Models;

use Finance\Entities\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Payment extends Model
{
    public function transactions(): MorphMany
    {
        return $this->morphMany(Transaction::class, "payable");
    }

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, "bank_id");
    }
}
