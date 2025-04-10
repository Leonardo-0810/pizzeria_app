<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pizzaingredient
 *
 * @property $id
 * @property $pizzas_id
 * @property $ingredients_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingredient $ingredient
 * @property Pizza $pizza
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pizzaingredient extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['pizzas_id', 'ingredients_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ingredient()
    {
        return $this->belongsTo(\App\Models\Ingredient::class, 'ingredients_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pizza()
    {
        return $this->belongsTo(\App\Models\Pizza::class, 'pizzas_id', 'id');
    }
    
}
