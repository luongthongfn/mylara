<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    // protected $table = 'images';
    protected $fillable = ['name','product_id'];
    public $timestamps = false;
    //
    public function images()
    {
        return $this->belongsTo('App\models\Product','product_id');
    }
}
