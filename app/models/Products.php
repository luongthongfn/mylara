<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','product_id'];
    public $timestamps = false;
    //
    public function productImage()
    {
        return $this->hasMany('App\models\Images');
    }
}
