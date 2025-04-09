<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'clients_id',
        'branches_id',
        'total_price',
        'status',
        'delivery_type',
        'delivery_person_id',
    ];
}
