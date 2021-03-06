<?php

namespace Dung\Product\Http\Requests;

use Dung\Product\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required|max:30',
            'image' => 'image|' . (($this->method() == 'POST') ? 'required' : 'nullable'),
            'price' => 'min:10000|numeric|required',
            'category_id' => 'in:' . Category::pluck('id')->implode(','),
            'description' => 'required',
            'status' => 'in:0, 1'
        ];
    }
}
