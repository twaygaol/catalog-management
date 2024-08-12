<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    publiC function index()
    {
        $categories = Category::all();
        $products = Product::all(); 
        return view('product-grid', compact('products', 'categories'));
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function showByCategory($categoryId)
    {
        $categories = Category::all(); 
        $category = Category::findOrFail($categoryId); 
        $products = $category->products; 

        return view('product-grid', compact('products', 'categories'));
    }
}
