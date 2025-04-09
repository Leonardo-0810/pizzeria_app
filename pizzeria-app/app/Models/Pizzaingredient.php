<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizzaingredient extends Model
{
    use HasFactory;
    protected $fillable = [
        'pizzas_id',
        'ingredients_id',
        
    ];  
}
