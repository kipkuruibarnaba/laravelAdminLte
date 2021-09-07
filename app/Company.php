<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name', 'email', 'logo'
    ];

 public function getFeaturedAttribute($logo){
        return asset($logo);
    }

    protected $dates = ['deleted_at'];   
    public function employees()
    {
       return $this->hasMany('App\Employee');
    }
}