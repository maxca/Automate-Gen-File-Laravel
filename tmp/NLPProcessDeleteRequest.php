<?php
namespace App\Http\Requests\NLPProcess;

use App\Http\Requests\Request;

class NLPProcessDeleteRequest extends Request
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
            'id' => 'required|exists:nlp_process,id',
        ];
    }

}
