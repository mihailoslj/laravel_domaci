<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ //omogucujemo da se unose ovi atributi tabele post pozivom
        'name',
        'slug',
        'description',
        'price'
    ];
}
