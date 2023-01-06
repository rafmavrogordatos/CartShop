<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Display ther list of products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    //Display the details of a specific product
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
    //Display the form to create a new product
    public function create()
    {
        return view('products.create');
    }
    //Create a new product
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('products.show', $product->id);
    }
    //Display the form to edit a product
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    //Update a product
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.show', $product->id);
    }
    //Delete a product
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }



}
