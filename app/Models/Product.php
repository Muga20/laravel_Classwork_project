<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['product_name','product_category','product_price','product_description','status'];  // this is the line that allows mass assignment
    use HasFactory;

  
}
