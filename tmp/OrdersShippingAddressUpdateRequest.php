<?php
namespace App\Http\Requests\OrdersShippingAddress;

use App\Http\Requests\Request;

class OrdersShippingAddressUpdateRequest extends Request
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
            'id' => 'required|exists:ordersshippingaddress,id',
        ];
    }

}
