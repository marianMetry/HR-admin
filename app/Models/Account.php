<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'emplyoee_id',
        'type',
        'type_payment',
        'request_description',
        'status',
        'value',
      ];
}
