<?php

namespace App\Http\Controllers\backend;


use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = Product::orderBy('id','DESC')->get();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
       return view('backend.product.create', compact('categories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $product = new Product();
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'slug' => 'required|string|min:3|max:255|unique:products',
            'sku' => 'required|string|min:3|max:255|unique:products',
            'image'=>'nullable|image|mimes:jpeg,jpg,gif,png|max:2048',
            'price'=>'required',
            'actual_price' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image'.$extension;
            $file->move('upload/images/',$filename);
            $input['image']= $filename;
        }

        Product::create($input);
//        $product->save($input);
        return redirect()->route('product.index')->with('success', 'New product has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
