<?php

namespace App\Http\Controllers\forntend;

use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('frontend.product.index', compact('products'));

    }
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('frontend.product.show',compact('product'));
    }
}
