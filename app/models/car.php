<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    // protected $table = 'cars';
    protected $fillable = ['name', 'price'];
    public $timestamps = false;
    //
    public function car()
    {
        return $this->belongsToMany('App\models\color', 'car_colors');
    }
}
