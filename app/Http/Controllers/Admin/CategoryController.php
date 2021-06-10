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
        //
    }
    
    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
