<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    // Dummy data is useful for testing
    use HasFactory;
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
