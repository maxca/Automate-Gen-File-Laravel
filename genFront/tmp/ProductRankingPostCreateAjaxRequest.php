<?php
namespace App\Http\Requests\ProductRanking;

use App\Http\Requests\Request;

class ProductRankingPostCreateAjaxRequest extends FormRequest
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
            'id' => 'required|numeric|min:0',
        ];
    }

}
