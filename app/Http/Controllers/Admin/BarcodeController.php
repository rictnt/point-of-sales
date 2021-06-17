<?php

namespace App\Http\Controllers\Admin;

use App\Models\Barcode;
use App\Models\Product;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        return view('admin.barcode.index', compact('product'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function show(Barcode $barcode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function edit(Barcode $barcode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barcode $barcode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barcode $barcode)
    {
        //
    }


    public static function createBarCode($post){
        $barcode_type = $post->barcode_id ?? 1;
        $number = $post->outlet_id . $post->id;

        if ($barcode_type == 4) { // UPC-A
            $code = '200' . str_pad($number, 8, '0');
        }
        else{ // EAN-13 , Others
            $code = '200' . str_pad($number, 9, '0');
        }

        
        $weightflag = true;
        $sum = 0;
        for ($i = strlen($code) - 1; $i >= 0; $i--)
        {
            $sum += (int)$code[$i] * ($weightflag?3:1);
            $weightflag = !$weightflag;
        }
        $code .= (10 - ($sum % 10)) % 10;

        return $code;

    }
}
