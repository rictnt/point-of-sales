<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExpenseCategory;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expense_categories = ExpenseCategory::all();
        return view('admin.expense_categories.index', compact('expense_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required|string|min:3|max:50|unique:expense_categories,name'
        ]);

        ExpenseCategory::create($request->all());
        notify()->success('Category has been added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseCategory $expense_category)
    {
        $request->validate([
            'name' => 'nullable|string|min:3|max:50|unique:expense_categories,name',
            'status' => 'nullable'
            ]);

        if ($request->name) {
            $expense_category->update($request->only(['name']));
            notify()->success('Category has been updated', 'Success');
        }

        if ($request->status == 'toogle') {
            $expense_category->update([
                'status' => !$expense_category->status,
            ]);
            notify()->success('Category Status has been updated', 'Success');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseCategory $expense_category)
    {
        $expense_category->delete();
        notify()->success('Category status has been deleted', 'Success');
        return back();
    }
}
