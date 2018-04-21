<?php
namespace App\Http\Controllers\PointCampaign;

use App\Http\Controllers\Controller;
use App\Http\Requests\PointCampaign\PointCampaignRequest;
use App\Http\Requests\PointCampaign\PointCampaignGetRequest;
use App\Http\Requests\PointCampaign\PointCampaignCreateRequest;
use App\Http\Requests\PointCampaign\PointCampaignUpdateRequest;
use App\Http\Requests\PointCampaign\PointCampaignDeleteRequest;
use App\Repository\PointCampaign\PointCampaignRepository;

class PointCampaignController extends Controller
{

    protected $pointcampaign;

    public function __construct(PointCampaignRepository $pointcampaign)
    {
        $this->pointcampaign = $pointcampaign;
    }
    public function createPointCampaign(PointCampaignCreateRequest $request)
    {
        $query = $this->pointcampaign->createData($request->all());
        return response()->json($query); 
    }
    public function getPointCampaignList(PointCampaignGetRequest $request)
    {
        $query = $this->pointcampaign->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deletePointCampaign(PointCampaignDeleteRequest $request)
    {   
        $query = $this->pointcampaign->delete($request->all());
        return response()->json($query);
    }
    public function updatePointCampaign(PointCampaignUpdateRequest $request)
    {
        $query = $this->pointcampaign->updateData($request->all());
        return response()->json($query);   
    }

}
