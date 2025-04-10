<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rawmaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'unit',
        'current_stock',
    ];
}
