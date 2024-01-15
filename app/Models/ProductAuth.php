<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAuth extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner',
        'product_name',
        'product_type',
        'product_quantity',
        'product_price',
    ];
    public $timestamps = false;
}
