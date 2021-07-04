<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
    	
    	'name',
    	'lastname',
    	'address_num',
    
    ]

    public function street(){
    	return $this->belongsTo(Street::class);
    }
}
