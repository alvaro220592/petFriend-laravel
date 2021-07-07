<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'breed',
        'gender',
        'observarions',
        'client_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}