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
        Brand::create($request->only(['name']));
        notify()->success('New brand has been added', 'Success');
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Brand $brands)
    {
        echo $brands::all();
        // $request->validate([
        //     'name' => 'nullable|string|min:3|max:50|unique:categories,name',
        //     'status' => 'nullable'
        //     ]);

        // if ($request->name) {
        //     $brands->update($request->only(['name']));
        //     notify()->success('Brands has been updated', 'Success');
        // }

        // if ($request->status == 'toogle') {
        //     echo $brands;
        //     $brands->update([
        //         'status' => !$brands->status,
        //     ]);
        //     notify()->success('Brands status has been updated', 'Success');
        // }
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brands)
    {
        echo $brands;
        die();
        $brands->delete();
        notify()->success('Brand has been deleted', 'Success');
        return back();
    }
}
