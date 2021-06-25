<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'supplier_id' => 'required|integer',
            'date' => 'nullable|date',
            'invoice' => 'required',
            'products' => 'required',
            'products.*.cost' => 'required',
            'sub_total' => 'required|integer',
            'discount' => 'required|integer',
            'grand_total' => 'required|integer',
            'paid' => 'required|integer',
            'due' => 'required|integer',
            'payment_method' => 'required|string',
            'product_status' => 'required|integer',
        ];
    }
}
