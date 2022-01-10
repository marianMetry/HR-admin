<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'total_holiday',
        'reason',
        'status',
        'total_days',
        
      ];
}
