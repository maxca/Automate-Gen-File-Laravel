<?php
namespace App\Http\Controllers\PointCampaignUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\PointCampaignUser\PointCampaignUserRequest;
use App\Http\Requests\PointCampaignUser\PointCampaignUserGetRequest;
use App\Http\Requests\PointCampaignUser\PointCampaignUserCreateRequest;
use App\Http\Requests\PointCampaignUser\PointCampaignUserUpdateRequest;
use App\Http\Requests\PointCampaignUser\PointCampaignUserDeleteRequest;
use App\Repository\PointCampaignUser\PointCampaignUserRepository;

class PointCampaignUserController extends Controller
{

    protected $pointcampaignuser;

    public function __construct(PointCampaignUserRepository $pointcampaignuser)
    {
        $this->pointcampaignuser = $pointcampaignuser;
    }
    public function createPointCampaignUser(PointCampaignUserCreateRequest $request)
    {
        $query = $this->pointcampaignuser->createData($request->all());
        return response()->json($query); 
    }
    public function getPointCampaignUserList(PointCampaignUserGetRequest $request)
    {
        $query = $this->pointcampaignuser->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deletePointCampaignUser(PointCampaignUserDeleteRequest $request)
    {   
        $query = $this->pointcampaignuser->delete($request->all());
        return response()->json($query);
    }
    public function updatePointCampaignUser(PointCampaignUserUpdateRequest $request)
    {
        $query = $this->pointcampaignuser->updateData($request->all());
        return response()->json($query);   
    }

}
