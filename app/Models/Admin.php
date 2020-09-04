<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';
    protected $fillable = ['aname','password','aemail'];
    public $timestamps = true;
    protected $hidden = [
        'password', 'remember_token',
    ];
}
