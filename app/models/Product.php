<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['name','product_id'];
    public $timestamps = false;
    //
    public function productImage()
    {
        return $this->hasMany('App\models\Images');
    }
}
