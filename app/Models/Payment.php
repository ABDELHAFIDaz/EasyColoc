<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Payment extends Pivot
{
    protected $table = 'payments';
    protected $fillable = [
        'user_id',
        'expense_id',
        'status',
        'amount_to_pay'
    ];
}
