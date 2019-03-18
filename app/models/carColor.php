<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class carColor extends Model
{
    // protected $table = 'cars';
    protected $fillable = ['car_id','color_id'];
    public $timestamps = false;
    //
    public function images()
    {

    }
}
