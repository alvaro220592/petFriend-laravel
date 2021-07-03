<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    public function city(){
    	return $this->belongsTo(City::class);
    }

    public function clients(){
    	return $this->hasMany(Client::class);
    }
}
