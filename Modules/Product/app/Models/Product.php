<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
        'stock_quantity'
    ];

    protected $hidden = [
        'status',
        'stock_quantity',
        'timestamps',
        'created_at',
        'updated_at'
    ];

}
