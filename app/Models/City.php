<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [

    	'city',
        
    ]

    pubilc function state(){
    	return $this->belongsTo(State::class);
    }

    public function streets(){
    	return $this->hasMany(Street::class);
    }
}
