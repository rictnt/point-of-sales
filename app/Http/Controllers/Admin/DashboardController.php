<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $counter = [
            'customers' => Customer::count(),
            'suppliers' => Supplier::count(),
            'purchase' => Purchase::count(),
            'total_sale' => 0,
            'total_profit' => 0,
            'total_loss' => 0,
        ];

        return view('admin.dashboard', compact('counter'));
    }
}
