<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Iphone extends Model
{
    protected $table = 'iphones';
    protected $fillable = [
        'model',
        'color',
        'storage',
        'price',
        'description',
        'image',
    ];
}
