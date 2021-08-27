<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'service',
        'pick_up',
        'dateTime',
        'pick_up',
        'user_id',
        'client_id',
        'pet_id'
    ];

    // protected $casts = [
    //     'service' => 'array'
    // ];

    protected $dates = [
        'date'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pet(){
        return $this->belongsTo(Pet::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
