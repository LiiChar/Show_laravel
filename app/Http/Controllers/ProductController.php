<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        $products = Product::all();

        view('products', $products);
        return view('products', ['products' => $products]);

    }

    public function show (string $id) {
        $product = Product::where('id', $id)->first();

        return view('product', ['product' => $product]);
    }

    public function create (Request $request) {
        // Product::create(
        //     'name' -> $request->name,
        //     'description' -> $request->description,
        //     'price' -> $request->price,
        //     'image' -> $request->image,
        //     'stock' -> $request->stock,
        //     'attributes' -> $request->attributes,
        // )
    }
    
    public function store () {
        
    }

    public function destroy (Request $request) {
        Product::destroy($request->id);
    }
}
