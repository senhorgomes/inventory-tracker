<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
        'sku',
        'category_id',
    ];
}
