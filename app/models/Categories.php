<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $fillable = [
        'name', 'order', 'alias', 'parent_id', 'keywords', 'description'
    ];

    public function parent_name()
    {
        return $this->belongsTo (self::class, 'parent_id');
    }
}
