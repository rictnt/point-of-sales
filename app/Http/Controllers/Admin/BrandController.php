<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        $items = Brand::all();
        $module = 'brand';
        return view('admin.components.common-crud.index', compact('items','module'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:brands,name',
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
            'name' => 'required|string|unique:brands,name',
        ]);

        if ($request->name || $request->description) {
            $brand->update($request->all());
            notify()->success('Brand has been updated', 'Success');
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
