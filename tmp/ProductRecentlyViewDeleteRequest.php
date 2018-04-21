<?php
namespace App\Http\Requests\ProductRecentlyView;

use App\Http\Requests\Request;

class ProductRecentlyViewDeleteRequest extends Request
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
            'id' => 'required|exists:productrecentlyview,id',
        ];
    }

}
