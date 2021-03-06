<?php
namespace App\Http\Requests\UsersProduct;

use App\Http\Requests\Request;

class UsersProductUpdateRequest extends Request
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
            'id' => 'required|exists:users_product,id',
        ];
    }

}
