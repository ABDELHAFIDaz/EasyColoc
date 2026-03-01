<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Membership extends Pivot
{
    protected $table = 'memberships';  
    protected $fillable = ['user_id', 'colocation_id', 'is_owner', 'left_at', 'total_debt'];
}
