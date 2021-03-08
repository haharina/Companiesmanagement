<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'id';

    protected $fillable=['name','email','logo','website'];

    public function companies(){
    return $this->hasMany('App\Employees','id','id');

    }
}
