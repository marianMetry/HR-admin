<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplyoee extends Model
{
    use HasFactory;

    protected $fillable = [

        'firstName',
        'secondName',
        'familyName',
        'phone',
        'email',
        'address',
        'salary',
        'logIn',
        'medicalInsuranse',
        'NumberInsurance',
        'department',
        'position',
        'card',
        'ID_card',
        'attend_at',
        'out_at',
        // 'start_contract_from',
        // 'end_contract_to',
        'password',
        'vacations_balance',
    ];

      // relations
      public function departmentId()
      {
          return $this->belongsTo(Department::class,'department_id','id');
      }
}
