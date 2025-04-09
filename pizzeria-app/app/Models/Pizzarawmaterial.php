<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizzarawmaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'pizzas_id',
        'raw_materials_id',
        'quantity',
    ];
}
