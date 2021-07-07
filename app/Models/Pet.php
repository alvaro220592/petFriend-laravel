<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_name',
        'species',
        'breed',
        'gender',
        'observations',
        'client_id'
    ];

    protected $dates = ['datetime'];

    protected $casts = [
        'service' => 'array'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function schedules(){
        return $this->hasMany(Schedules::class);
    }
}
