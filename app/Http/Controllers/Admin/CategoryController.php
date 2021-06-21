<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Requests\CommonCrudRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        //
    }

    public function store(CommonCrudRequest $request)
    {
        Category::create($request->all());
        notify()->success('Category has been added', 'Success');
        return back();
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(CommonCrudRequest $request, Category $category)
    {
        if ($request->name) {
            $category->update($request->only(['name']));
            notify()->success('Category has been updated', 'Success');
        }

        if ($request->status == 'toogle') {
            $category->update([
                'status' => !$category->status,
            ]);
            notify()->success('Category status has been updated', 'Success');
        }

        return back();
    }

    public function destroy(Category $category)
    {
        $category->delete();
        notify()->success('Category has been deleted', 'Success');
        return back();
    }
}
