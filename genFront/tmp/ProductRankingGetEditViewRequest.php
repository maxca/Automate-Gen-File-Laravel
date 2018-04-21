<?php
namespace App\Http\Requests\ProductRanking;

use Illuminate\Foundation\Http\FormRequest;

class ProductRankingGetEditViewRequest extends FormRequest
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
