<?php
namespace App\Http\Requests\MerchantPackage;

use App\Http\Requests\Request;

class MerchantPackageDeleteRequest extends Request
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
            'id' => 'required|exists:merchant_package,id',
        ];
    }

}
