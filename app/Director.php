<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //
    protected $fillable = [
        'idDirector', 'identificacion', 'nombres', 'nacionalidad',
    ];
}
