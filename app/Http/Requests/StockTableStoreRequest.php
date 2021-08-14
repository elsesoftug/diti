<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockTableStoreRequest extends FormRequest
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
            'item_name' => ['required', 'max:255', 'string'],
            'unit' => ['required', 'max:255', 'string'],
            'category' => ['required', 'max:255', 'string'],
            'buying_price' => ['required', 'max:255'],
            'quantity' => ['required', 'numeric'],
            'description' => ['required', 'max:255', 'string'],
        ];
    }
}
