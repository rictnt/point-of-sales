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
        $this->request->validate([
            'category_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'unit_id' => 'required|numeric',

            'name' => 'required|string|max:100|min:2|unique:products,name',
            'alert_stock_quantity' => 'nullable|numeric',
            'barcode_id' => 'nullable|numeric',
            'weight' => 'nullable|string',
            'sku' => 'nullable|string',
            'cost_price' => 'required|not_in:0',
            'sell_price' => 'required|not_in:0',
            'tax' => 'integer',
            'details' => 'required|max:500',
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1024|dimensions:max_width=5000,max_height=5000',
        ]);

        // print_r($this->request->all());

        $product =  Product::create($this->request->except('image'));

        if (!$product) {
            return response("Error", 404);
        }

        $product->barcode = $this->createBarCode($product);

        if ($this->request->file('image')) {
            $product->image = $this->request->image->store('images/products');
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
    public function update(Product $product)
    {
        // $this->request->validate([
        //     'category_id' => 'required|numeric',
        //     'brand_id' => 'required|numeric',
        //     'unit_id' => 'required|numeric',

        //     'name' => 'required|string|max:100|min:2|unique:products,name,' .$product->id,
        //     'alert_stock_quantity' => 'nullable|numeric',
        //     'barcode_id' => 'nullable|numeric',
        //     'weight' => 'nullable|string',
        //     'sku' => 'nullable|string',
        //     'cost_price' => 'required|not_in:0',
        //     'sell_price' => 'required|not_in:0',
        //     'tax' => 'integer',
        //     'details' => 'required|max:500',
        //     'image' => 'nullable|file|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1024|dimensions:max_width=5000,max_height=5000',
        // ]);

        // if (!$product) {
        //     return response("Error", 404);
        // }

        $post =  $product->update([
            'category_id' => $this->request->category_id,
            'brand_id' => $this->request->brand_id,
            'unit_id' => $this->request->unit_id,

            'name' => $this->request->name,
            'alert_stock_quantity' => $this->request->alert_stock_quantity,
            'barcode_id' => $this->request->barcode_id,
            'weight' => $this->request->weight,
            'sku' => $this->request->sku,
            'cost_price' => $this->request->cost_price,
            'sell_price' => $this->request->sell_price,
            'tax' => $this->request->tax,
            'details' => $this->request->details,
        ]);

        print_r($this->request->name);

        // $product->barcode = $this->createBarCode($product);

        // if ($this->request->file('image')) {
        //     $product->image = $this->request->image->store('images/products');

        //     // if(Storage::exists($product->image)) {
        //     //     unlink($product->image); //delete from storage
        //     // }
        // }

        // $product->save();

        // notify()->success('Product has been added', 'Success');
        // return redirect(route('admin.products.index'));
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


    public function createBarCode($product){
        $barcode_type = $product->barcode_id ? $product->barcode_id : 1;
        $number = $product->id;

        if ($barcode_type == 4) { // UPC-A
            $code = '200' . str_pad($number, 8, '0');
        }
        else{ // EAN-13 , Others
            $code = '200' . str_pad($number, 9, '0');
        }
        
        $weightflag = true;
        $sum = 0;
        for ($i = strlen($code) - 1; $i >= 0; $i--)
        {
            $sum += (int)$code[$i] * ($weightflag?3:1);
            $weightflag = !$weightflag;
        }
        $code .= (10 - ($sum % 10)) % 10;

        return $code;
    }
}
