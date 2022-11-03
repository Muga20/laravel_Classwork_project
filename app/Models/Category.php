<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =['category_name'];  // this is the line that allows mass assignment
     
    public function products()
    {
        return $this -> hasMany(Product::class);
    }
  
}
