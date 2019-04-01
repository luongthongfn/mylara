<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    protected $table = 'Medias';
    protected $fillable = ['title', 'path', 'table', 'object_id', 'description'];
    public $timestamps = false;
}
