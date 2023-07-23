<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $table = 'car';
    
    protected $fillable = [
        'plateNo',
        'model',
        'pricePerDay',
    ];
}
