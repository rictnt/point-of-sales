<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ExpenseCategory;
use App\Http\Controllers\Controller;

class ExpenseCategoryController extends Controller
{

    public $module = 'ExpenseCategory';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ExpenseCategory::all();
        $module = 'Expense Category';
        return view('admin.components.common-crud.index', compact('items', 'module'));
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
            'name' => 'required|string',
        ]);
        $expense_category->update($request->all());
        notify()->success('Category has been updated', 'Success');
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
        notify()->success('Category has been deleted', 'Success');
        return back();
    }
}
