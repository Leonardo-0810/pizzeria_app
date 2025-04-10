<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pizzarawmaterial
 *
 * @property $id
 * @property $pizzas_id
 * @property $raw_materials_id
 * @property $quantity
 * @property $created_at
 * @property $updated_at
 *
 * @property Pizza $pizza
 * @property Rawmaterial $rawmaterial
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pizzarawmaterial extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['pizzas_id', 'raw_materials_id', 'quantity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pizza()
    {
        return $this->belongsTo(\App\Models\Pizza::class, 'pizzas_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rawmaterial()
    {
        return $this->belongsTo(\App\Models\Rawmaterial::class, 'raw_materials_id', 'id');
    }
    
}
