<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'payments',
        )->withPivot('amount_to_pay', 'status')
        ->withTimestamps();
    }
}
