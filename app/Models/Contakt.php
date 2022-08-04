<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contakt extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable=['name', 'fired', 'data_fired'];
}
