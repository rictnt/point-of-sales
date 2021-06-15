<?php

namespace App\Http\Controllers\Admin;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('admin.suppliers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:suppliers,email',
            'mobile' => 'required|string|unique:suppliers,mobile',
            'address' => 'nullable|string',
            'details' => 'nullable|string',
        ]);

        Supplier::create($request->all());
        notify()->success('Supplier has been added', 'Success');

        return redirect(route('admin.suppliers.index'));
    }

    public function show(Supplier $supplier)
    {
        //
    }

    public function edit(Supplier $supplier)
    {
        return view('admin.suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:suppliers,email',
            'mobile' => 'required|string|unique:suppliers,mobile',
            'address' => 'nullable|string',
            'details' => 'nullable|string',
        ]);

        $supplier->update($request->all());
        notify()->success('Supplier has been updated', 'Success');
        return back();
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        notify()->success('Supplier has been deleted', 'Success');
        return back();
    }
}
