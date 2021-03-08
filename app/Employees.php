<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'email',
        'phone'       
    ];

    public function companies()
    {

    return $this->hasOne('App\Companies','id','id');
    }

}
