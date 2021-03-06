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

    protected $guarded = [];

    public function street(){
    	return $this->belongsTo(Street::class);
    }

    public function phone(){
        return $this->hasOne(Phone::class);
    }

    public function email(){
        return $this->hasOne(Email::class);
    }

    public function pets(){
        return $this->hasMany(Pet::class);
    }

    public function schedules(){
        return $this->hasMany(Schedules::class);
    }
}
