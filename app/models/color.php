<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    protected $table = 'colors';
    protected $fillable = ['name'];
    public $timestamps = false;
    //
    public function color()
    {
        return $this->belongsToMany('App\models\car', 'car_colors');
    }
}
