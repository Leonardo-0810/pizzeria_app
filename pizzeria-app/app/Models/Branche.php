<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    use HasFactory;
    protected $fillable = ['name','address', ];

  
}
