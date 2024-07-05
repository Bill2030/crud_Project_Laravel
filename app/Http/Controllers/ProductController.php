<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("products.index", ["products"=>Product::orderBy('created_at')->paginate(3)]);
    }
    public function create(Request $request)
    {
       
        return view("products.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required",
            "description"=>["required"],
            "price"=> "required",
        ]);
        $product = new product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('products.index');
    }
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
}
