<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'product_image',
        'product_name',
        'product_type',
        'product_description',
        'product_price',
        'category'
    ];
    public $timestamps = true;
}
