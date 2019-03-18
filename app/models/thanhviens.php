<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class thanhviens extends Model
{
    //
    protected $table = 'thanhviens';
    protected $fillable = ['user', 'email', 'pass'];
    protected $hidden = ['pass', 'remember_token',];

}
