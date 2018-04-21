<?php
namespace App\Http\Requests\ShippingList;

use App\Http\Requests\Request;

class ShippingListUpdateRequest extends Request
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
            'id' => 'required|exists:shipping_list,id',
        ];
    }

}
