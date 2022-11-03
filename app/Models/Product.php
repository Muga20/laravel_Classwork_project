<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['product_name','category_id','product_price','product_description','status','product_image'];  // this is the line that allows mass assignment
    use HasFactory;

    public function category()
    {
        return $this -> belongsTo(Category::class);
    }
 
}
