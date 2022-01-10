<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_department',
        'manager',
        'work_time'
    ];

    // relations
    public function emplyoees()
    {
        return $this->hasMany(Emplyoee::class,'emplyoee_id','id');
    }
}
