<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PizzaSize
 *
 * @property $id
 * @property $pizzas_id
 * @property $size
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Pizza $pizza
 * @property OrderPizza[] $orderPizzas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PizzaSize extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['pizzas_id', 'size', 'price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderPizzas()
    {
        return $this->hasMany(\App\Models\OrderPizza::class, 'id', 'pizza_sizes_id');
    }
    
}
