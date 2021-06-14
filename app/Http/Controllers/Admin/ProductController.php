<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'unit_id' => 'required|numeric|max:11',
            'tax' => 'nullable',
            'name' => 'required|max:100|min:2',
            'serial' => 'required|numeric',
            'model' => 'nullable|max:200',
            'purchase_price' => 'required|integer|not_in:0',
            'selling_price' => 'required|integer|not_in:0',
            'details' => 'required|max:500',
            'image' => 'nullable|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1024|dimensions:max_width=5000,max_height=5000',
        ]);
        
        $product =  Product::create($request->except('image'));


        $imagePath = $request->image->store('product');

        $product->update([
            'image' => $imagePath
        ]);

        notify()->info('Added Successfully', 'Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
