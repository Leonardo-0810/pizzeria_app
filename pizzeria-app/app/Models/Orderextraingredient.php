<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderExtraIngredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'orders_id',
        'extra_ingredients_id',
        'quantity',
    ];
}
