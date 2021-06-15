<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index', compact('customers'));
    }

    public function create()
    {
        return view('admin.customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email',
            'mobile' => 'required|string',
            'address' => 'nullable|string',
        ]);

        Customer::create($request->all());
        notify()->info('Customer has been added', 'Success');
        return back();
    }

    public function show(Customer $customer)
    {
        //
    }

    public function edit(Customer $customer)
    {
        return view('admin.customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email',
            'mobile' => 'required|string',
            'address' => 'nullable|string',
        ]);

        $customer->update($request->all());
        notify()->info('Customer has been updated', 'Success');

        return back();
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        notify()->info('Customer has been deleted', 'Success');
        return back();
    }
}
