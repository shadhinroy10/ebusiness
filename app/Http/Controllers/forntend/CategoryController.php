<?php

namespace App\Http\Controllers\forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('frontend.category.index');
    }
}
