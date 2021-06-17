<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
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
        $products = Product::all()->load(['unit', 'brand', 'category']);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $units = Unit::all();
        $brands = Brand::all();
        return view('admin.products.create', compact('categories', 'units', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    return $request->all();

        $request->validate([
            'category_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'unit_id' => 'required|numeric',

            'name' => 'required|string|max:100|min:2|unique:products,name',
            'sku' => 'required|string',
            'cost_price' => 'required|not_in:0',
            'sell_price' => 'required|not_in:0',
            'tax' => 'integer',
            'details' => 'required|max:500',
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1024|dimensions:max_width=5000,max_height=5000',
        ]);

        $product = new Product($request->except('image'));

        $product->barcode = BarcodeController::createBarCode($product);

        if ($request->file('image')) {
            $product->image = $request->image->store('images/products');
        }

        $product->save();

        notify()->success('Product has been added', 'Success');
        return redirect(route('admin.products.index'));
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
        notify()->success('Product has been updated', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        notify()->success('Product has been deleted', 'Success');
        return back();
    }
}
