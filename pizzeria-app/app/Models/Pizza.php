<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pizza
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Pizzaingredient[] $pizzaingredients
 * @property Pizzarawmaterial[] $pizzarawmaterials
 * @property PizzaSize[] $pizzaSizes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pizza extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pizzaingredients()
    {
        return $this->hasMany(\App\Models\Pizzaingredient::class, 'id', 'pizzas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pizzarawmaterials()
    {
        return $this->hasMany(\App\Models\Pizzarawmaterial::class, 'id', 'pizzas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pizzaSizes()
    {
        return $this->hasMany(\App\Models\PizzaSize::class, 'id', 'pizzas_id');
    }
    
}
