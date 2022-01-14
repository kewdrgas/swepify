<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'offer_id',
        'adres',
        'data',
        'metraz',
        'zakres_uslug',
        'accepted',
    ];
}
