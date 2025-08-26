<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    protected $table = 'teachers';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
