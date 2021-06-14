<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'brand_id', 'unit_id', 'tax', 'name', 'serial', 'model', 'purchase_price', 'selling_price', 'details', 'image'];

}
