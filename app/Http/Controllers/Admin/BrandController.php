<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommonCrudRequest;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
    }

    public function store(CommonCrudRequest $request)
    {
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
            'name' => 'nullable|string|min:3|max:50|unique:brands,name,' .$brand->id,
            'status' => 'nullable'
            ]);

        if ($request->name) {
            $brand->update($request->only(['name']));
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
