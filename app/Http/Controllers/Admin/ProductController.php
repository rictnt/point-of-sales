<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            'category_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'unit_id' => 'required|numeric',
            'barcode_type' => 'nullable|numeric',
            
            'name' => 'required|string|max:100|min:2|unique:products,name',
            'price' => 'required|numeric',
            'stock_alert' => 'nullable|numeric',
            'sku' => 'nullable|string',

            'details' => 'required|max:500',
            'image' => 'nullable|mimes:jpg,jpeg,png,bmp,gif,svg,webp',
        ]);


        $product =  new Product($request->except('image'));

        $product->sku = $this->createBarCode($product);

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
        $categories = Category::all();
        $units = Unit::all();
        $brands = Brand::all();
        return view('admin.products.edit', compact('product', 'categories', 'units', 'brands'));
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
        
        $request->validate([
            'category_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'unit_id' => 'required|numeric',

            'name' => 'required|string|max:100|min:2',
            'alert_stock_quantity' => 'nullable|numeric',
            'barcode_id' => 'nullable|numeric',
            'weight' => 'nullable|string',
            'sku' => 'nullable|string',
            'cost_price' => 'required|not_in:0',
            'sell_price' => 'required|not_in:0',
            'tax' => 'integer',
            'details' => 'required|max:500',
            'image' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp',
        ]);


        $product->update($request->except('image'));

        $product->barcode = $this->createBarCode($product);

        if ($request->file('image')) {
            if(Storage::exists($product->image)) {
                Storage::delete($product->image);
             }
             
            $product->image = $request->image->store('images/products');
        }

        $product->save();

        notify()->success('Product has been added', 'Success');
        return redirect(route('admin.products.index'));
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


    public function createBarCode($product)
    {
        $type = $product->barcode_id;
        $number = $product->id;

        if ($type == 4) {
            // UPC-A
            $code = '200' . str_pad($number, 8, '0');
        } else {
            // EAN-13 , Others
            $code = '200' . str_pad($number, 9, '0');
        }

        $weightflag = true;
        $sum = 0;

        for ($i = strlen($code) - 1; $i >= 0; $i--) {
            $sum += (int)$code[$i] * ($weightflag ? 3 : 1);
            $weightflag = !$weightflag;
        }
        $code .= (10 - ($sum % 10)) % 10;

        return $code;
    }
}
