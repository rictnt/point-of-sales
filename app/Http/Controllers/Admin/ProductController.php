<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
            'product_name' => 'required|max:100',
            'serial_number' => 'required|integer',
            'product_model' => 'required|max:200',
            'category_id' => 'required',
            'purchase_price' => 'required|integer',
            'product_unit' => 'required|max:200',
            'selling_price' => 'required|integer',
            'tax_vat' => 'required|',
            'product_details' => 'required|max:5000',
            'product_image' => 'required | mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10000',
        ]);

        // randomly name generate
        $image_name = Str::random(10) . time() . "." . $request->product_image->getClientOriginalExtension();
        // catch the photo file
        $product_photo = $request->file('product_image');
        // Uplod the photo
        Image::make($product_photo)->resize(283, 293)->save(base_path('public/image_uploads/product_image/').$image_name, 50);

        Product::create($request->all());
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
