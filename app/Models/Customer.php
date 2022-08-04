<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    //use SoftDeletes;


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
        'else_company',
        'terr_company',
        'house_company',
        'object_company',
        'active',
        ];

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
