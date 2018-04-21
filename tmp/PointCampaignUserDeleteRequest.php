<?php
namespace App\Http\Requests\PointCampaignUser;

use App\Http\Requests\Request;

class PointCampaignUserDeleteRequest extends Request
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
            'id' => 'required|exists:point_campaign_user,id',
        ];
    }

}
