<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50|unique:brands,name'
        ]);

        Brand::create($request->all());
        notify()->success('Brand has been added', 'Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'nullable|string|min:3|max:50|unique:categories,name',
            'status' => 'nullable'
            ]);

        if ($request->name) {
            $brand->update($request->only(['name']));
            notify()->success('brand has been updated', 'Success');
        }

        if ($request->status == 'toogle') {
            $brand->update([
                'status' => !$brand->status,
            ]);
            notify()->success('Brand status has been updated', 'Success');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        notify()->success('Brand has been deleted', 'Success');
        return back();
    }
}
