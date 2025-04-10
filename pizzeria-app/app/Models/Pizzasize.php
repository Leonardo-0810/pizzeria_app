<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizzasize extends Model
{

    use HasFactory;

    protected $fillable = [
        'pizzas_id',
        'size',
        'price',
    ];
}
