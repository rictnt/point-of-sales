<?php

namespace App\Http\Controllers\Admin;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\User;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    public function index()
    {
        $categories = ExpenseCategory::all();
        $users = User::all();
        $expenses = Expense::all();
        return view('admin.expenses.index', compact('categories', 'users', 'expenses'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer|min:1|max:50',
            'schedule' => 'nullable|string|max:50',
            'transaction_method' => 'nullable|string|max:50',
            'expense_date' => 'required|string',
            'expense_by' => 'required|integer|max:10',
            'amount' => 'required|integer',
            'description' => 'nullable|string|max:500'
        ]);
        Expense::create($request->all());
        notify()->success('Added Successfully', 'Success');
        return back();
    }

    public function show(Expense $expense)
    {
        $categories = ExpenseCategory::all();
        $users = User::all();
        return view('admin.expenses.edit', compact('categories', 'users', 'expense'));
    }

    public function edit(Expense $expense)
    {
        //
    }

    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'category_id' => 'required|integer|min:1|max:50',
            'schedule' => 'nullable|string|max:50',
            'transaction_method' => 'nullable|string|max:50',
            'expense_date' => 'required|string',
            'expense_by' => 'required|integer|max:10',
            'amount' => 'required|integer',
            'description' => 'nullable|string|max:500'
            ]);

        $expense->update($request->all());
        notify()->success('Updated Successfully', 'Success');
        return redirect(route('admin.expense_categories.index'));
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();
        notify()->info('Deleted Successfully', 'Success');
        return back();
    }
}
