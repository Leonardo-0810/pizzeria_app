<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rawmaterial
 *
 * @property $id
 * @property $name
 * @property $unit
 * @property $current_stock
 * @property $created_at
 * @property $updated_at
 *
 * @property Pizzarawmaterial[] $pizzarawmaterials
 * @property Purchase[] $purchases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rawmaterial extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'unit', 'current_stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pizzarawmaterials()
    {
        return $this->hasMany(\App\Models\Pizzarawmaterial::class, 'id', 'raw_materials_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany(\App\Models\Purchase::class, 'id', 'raw_materials_id');
    }
    
}
