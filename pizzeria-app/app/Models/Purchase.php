<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'suppliers_id',
        'raw_materials_id',
        'quantity',
        'purchase_price',
        'purchase_date',
    ];
}
