<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $fillable = [
        'name', 'order', 'alias', 'parent_id', 'keywords', 'description'
    ];
}
