<?php
namespace App\Http\Requests\UploadFile;

use App\Http\Requests\Request;

class UploadFileUpdateRequest extends Request
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
            'id' => 'required|exists:upload_file,id',
        ];
    }

}
