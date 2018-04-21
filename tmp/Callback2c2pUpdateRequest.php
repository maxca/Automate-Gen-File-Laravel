<?php
namespace App\Http\Requests\Callback2c2p;

use App\Http\Requests\Request;

class Callback2c2pUpdateRequest extends Request
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
            'id' => 'required|exists:callback2c2p,id',
        ];
    }

}
