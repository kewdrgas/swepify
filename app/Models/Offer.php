<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $casts = [
    'working_days' => 'array',
];
    protected $fillable = [
        'title',
        'description',
        'location',
        'working_days',
        'zakres_uslug',
        'hours_start',
        'hours_stop',
        'price',
        'rating',
        'active',
        'business_id'
    ];
}
