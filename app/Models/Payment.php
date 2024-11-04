<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    //


    public function bank():BelongsTo
    {
        return $this->belongsTo(Bank::class,"bank_id");
    }
}
