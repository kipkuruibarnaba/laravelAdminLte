<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
     use HasFactory,SoftDeletes;

    protected $fillable = [
        'firstname', 'lastname', 'company_id','email','phone'
    ];

   public function companies()
    {
       return $this->hasMany('App\Employee');
    }
}
