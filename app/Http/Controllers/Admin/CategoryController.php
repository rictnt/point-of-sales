<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50|unique:categories,name'
        ]);
        Category::create($request->only(['name']));
        notify()->success('New category has been added', 'Success');
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

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'nullable|string|min:3|max:50|unique:categories,name',
            'status' => 'nullable'
            ]);

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
