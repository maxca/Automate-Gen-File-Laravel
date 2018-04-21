<?php
namespace App\Http\Controllers\ShopRanking;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShopRanking\ShopRankingRequest;
use App\Http\Requests\ShopRanking\ShopRankingGetRequest;
use App\Http\Requests\ShopRanking\ShopRankingCreateRequest;
use App\Http\Requests\ShopRanking\ShopRankingUpdateRequest;
use App\Http\Requests\ShopRanking\ShopRankingDeleteRequest;
use App\Repository\ShopRanking\ShopRankingRepository;

class ShopRankingController extends Controller
{

    protected $shopranking;

    public function __construct(ShopRankingRepository $shopranking)
    {
        $this->shopranking = $shopranking;
    }
    public function createShopRanking(ShopRankingCreateRequest $request)
    {
        $query = $this->shopranking->createData($request->all());
        return response()->json($query); 
    }
    public function getShopRankingList(ShopRankingGetRequest $request)
    {
        $query = $this->shopranking->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteShopRanking(ShopRankingDeleteRequest $request)
    {   
        $query = $this->shopranking->delete($request->all());
        return response()->json($query);
    }
    public function updateShopRanking(ShopRankingUpdateRequest $request)
    {
        $query = $this->shopranking->updateData($request->all());
        return response()->json($query);   
    }

}
