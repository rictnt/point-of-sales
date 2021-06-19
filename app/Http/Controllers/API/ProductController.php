<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sFor = $request->q ?? null;

        if ($sFor) {
            $products = Product::where('name','LIKE',"%{$sFor}%")->orWhere('id', $sFor);
        }

        return response($products->limit(5)->get(['id','name','barcode','sell_price','cost_price']));
    }
}
