<?php
namespace App\Http\Requests\OrdersItem;

use App\Http\Requests\Request;

class OrdersItemUpdateRequest extends Request
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
            'id' => 'required|exists:orders_item,id',
        ];
    }

}
