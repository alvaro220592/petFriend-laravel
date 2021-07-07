<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
    	
    	'client_name',
    	'client_lastname',
    	'address_num',
        'street_id',
    
    ];

    public function street(){
    	return $this->belongsTo(Street::class);
    }

    public function phone(){
        return $this->hasMany(Phone::class);
    }

    public function email(){
        return $this->hasMany(Email::class);
    }

    public function pets(){
        return $this->hasMany(Pet::class);
    }

    public function schedules(){
        return $this->hasMany(Schedules::class);
    }
}
