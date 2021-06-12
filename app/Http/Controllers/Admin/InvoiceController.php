<?php

namespace App\Http\Controllers\Admin;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
       return view('admin.invoices.index');
    }
    
    public function create()
    {
        return view('admin.invoices.create');
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(Invoice $invoice)
    {
        //
    }
    
    public function edit(Invoice $invoice)
    {
        //
    }
    
    public function update(Request $request, Invoice $invoice)
    {
        //
    }
    
    public function destroy(Invoice $invoice)
    {
        //
    }

    public function settings()
    {
        return view('admin.invoices.settings');
    }
}
