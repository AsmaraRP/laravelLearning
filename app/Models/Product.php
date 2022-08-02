<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'product_category', 'product_description', 'price'];
    // fillable tidak diberlakukan pada stock tapi masih dapat terisi
}
