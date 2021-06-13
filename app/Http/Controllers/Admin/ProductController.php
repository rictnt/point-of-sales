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
        // $request->validate([
        //     'category_id' => 'required|integer',
        //     'brand_id' => 'required|integer',
        //     'unit_id' => 'required|'max:200,
        //     'tax' => 'required|',
        //     'name' => 'required|max:100',
        //     'serial' => 'required|integer',
        //     'model' => 'required|max:200',
        //     'purchase_price' => 'required|integer',
        //     'selling_price' => 'required|integer',
        //     'details' => 'required|max:5000',
        //     'image' => 'required | mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10000',
        // ]);
        
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
