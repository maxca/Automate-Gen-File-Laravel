<?php
namespace App\Http\Requests\MemberShippingAddress;

use App\Http\Requests\Request;

class MemberShippingAddressUpdateRequest extends Request
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
            'id' => 'required|exists:member_shipping_address,id',
        ];
    }

}
