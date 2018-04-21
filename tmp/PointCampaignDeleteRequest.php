<?php
namespace App\Http\Requests\PointCampaign;

use App\Http\Requests\Request;

class PointCampaignDeleteRequest extends Request
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
            'id' => 'required|exists:point_campaign,id',
        ];
    }

}
