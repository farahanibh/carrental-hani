<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Car;

class Booking extends Model
{
    public $table = 'booking';
    
    protected $fillable = [
        'datePickup',
        'dateReturn',
        'location',
        'duration',
        'userID',
        'carID',   
    ];

    public function user(){
        return $this->belongsTo('App\User' , 'userID');
    }

    public function car(){
        return $this->belongsTo('App\Car' , 'carID');
    }
}
