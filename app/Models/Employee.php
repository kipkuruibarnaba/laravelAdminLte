<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'firstname', 'lastname', 'company_id', 'email','phone'
    ];

    public function getFeaturedAttribute($logo){
        return asset($logo);
    }

    protected $dates = ['deleted_at'];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
