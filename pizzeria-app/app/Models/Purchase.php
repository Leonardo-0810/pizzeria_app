<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Purchase
 *
 * @property $id
 * @property $suppliers_id
 * @property $raw_materials_id
 * @property $quantity
 * @property $purchase_price
 * @property $purchase_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Rawmaterial $rawmaterial
 * @property Supplier $supplier
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Purchase extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['suppliers_id', 'raw_materials_id', 'quantity', 'purchase_price', 'purchase_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rawmaterial()
    {
        return $this->belongsTo(\App\Models\Rawmaterial::class, 'raw_materials_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo(\App\Models\Supplier::class, 'suppliers_id', 'id');
    }
    
}
