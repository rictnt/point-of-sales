<?php

namespace App\Http\Controllers\API;

use App\Models\Purchase;
use App\Models\PurchaseItem;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        // return $request;

        $purchase = Purchase::create([
            'supplier_id' => $request->supplier_id,
            'date' => $request->date,
            'invoice' => $request->invoice,

            'sub_total' => $request->sub_total,
            // 'discount_type' => $request->discount_type,
            'discount' => $request->discount,
            'grand_total' => $request->grand_total,

            'paid' => $request->paid,
            'due' => $request->due,
            'payment_method' => $request->payment_method,
            'product_status' => $request->product_status,

            // 'status' => $request->status,
        ]);

        if ($purchase) {
        //    return $purchase;
            foreach ($request->products as $item) {
                PurchaseItem::create([
                    'purchase_id' => $purchase->id,
                    'product_id' => $item['id'],
                    'qty' => $item['qty'],
                    'cost' => $item['cost_price'],
                    'price' => $item['sell_price'],
                    'discount' => $item['discount'],
                    'total' => $item['total'],
                    'expire' => $item['expire'],
                ]);
            }
        }

        return response($purchase);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
