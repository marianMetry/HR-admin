<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attend extends Model
{
    protected $table ='attends';
    use HasFactory;
    protected $fillable = [
        'emplyoee_id',
        'attend_at',
        'out_at',
        'delay',
        'extra_time',
        'total_time',
        'department'

      ];
}
