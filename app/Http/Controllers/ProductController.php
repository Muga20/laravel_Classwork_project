<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function create()
    {
        $product = new Product();
        $categories = Category::all();
        return view('products.create', compact('product', 'categories'));
        
    }
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function store(Request $request)
    {    
        // $product = new Product($request->all());
        // $product->save();
        // dd($request->all());
        $request -> validate([
            'product_name' => 'required',
            'product_price' => 'required',
           
        ]);

        if($request->hasFile('file')){
              $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);

        $request->file->store('products', 'public');

        $product = new Product([ 
            'product_name' => $request->get('product_name'),
            'product_price' => $request->get('product_price'),
            'product_description' => $request->get('product_description'),
            'product_image' => $request->file->hashName(),
            'category_id' => $request->get('category_id'),
            'status'=>1
        ]);
        $product->save();
        return redirect()->route('products.index');
        }
        }
    }
       



