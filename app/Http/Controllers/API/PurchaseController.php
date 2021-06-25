<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\PurchaseStoreRequest;
use App\Models\Stock;
use App\Models\Purchase;
use App\Models\PurchaseItem;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function index()
    {
        //
    }

    public function store(PurchaseStoreRequest $request)
    {
        DB::transaction(function() {
            $purchase = Purchase::create([
                'supplier_id' => request()->supplier_id,
                'date' => request()->date ?? today(),
                'invoice' => request()->invoice,

                'sub_total' => request()->sub_total,
                'discount' => request()->discount,
                'grand_total' => request()->grand_total,

                'paid' => request()->paid,
                'due' => request()->due,
                'payment_method' => request()->payment_method,
                'product_status' => request()->product_status,
            ]);

            foreach (request()->products as $item) {
                PurchaseItem::create([
                    'purchase_id' => $purchase->id,
                    'product_id' => $item['id'],
                    'qty' => $item['qty'],
                    'cost' => $item['cost'],
                    'discount' => $item['discount'],
                    'total' => $item['total'],
                    'expire' => $item['expire'],
                ]);
                Stock::create([
                    'product_id' => $item['id'],
                    'qty' => $item['qty']
                ]);
            }
        });
        return response('success');
    }
    
    public function show(Purchase $purchase)
    {
        //
    }
    
    public function update(Request $request, Purchase $purchase)
    {
        //
    }
    
    public function destroy(Purchase $purchase)
    {
        //
    }
}
