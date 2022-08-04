<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Old_customers extends Model
{
    use HasFactory;
    protected $table = 'old_customers';

    protected $fillable=[
        'object',
        'name',
        'aadress',
        'contract',
        'notes',
        'keychain',
        'gate',
        'pict1',
        'pict2',
        'pict3',
        'longitude',
        'latitude',
        'paid',
        'district_id',
        'city_id',
        'category_id',
        'floor',
        'color',
        'entrance',
        'door',
        'windows',
        'balcony',
        'utility',
        'key_nr',
        'code',
        'fence',
        'dog',
        'scheme1',
        'scheme2',
        'scheme3',
        'document',
        'active',
    ];
}
