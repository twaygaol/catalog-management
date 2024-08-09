<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    // publiC function index()
    // {
    //     $products = Product::all();
    //     return view('pages.catalog', compact('products'));
    // }

    public function index()
    {
        $products = [
            (object)['name' => 'Product 1', 'price' => '9.99', 'image' => 'https://images.unsplash.com/photo-1550837368-6594235de85c'],
            (object)['name' => 'Product 2', 'price' => '9.99', 'image' => 'https://images.unsplash.com/photo-1551431009-a802eeec77b1'],
        ];

        return view('product-grid', compact('products'));
    }
}
