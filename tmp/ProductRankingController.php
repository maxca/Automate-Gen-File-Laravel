<?php
namespace App\Http\Controllers\ProductRanking;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRanking\ProductRankingRequest;
use App\Http\Requests\ProductRanking\ProductRankingGetRequest;
use App\Http\Requests\ProductRanking\ProductRankingCreateRequest;
use App\Http\Requests\ProductRanking\ProductRankingUpdateRequest;
use App\Http\Requests\ProductRanking\ProductRankingDeleteRequest;
use App\Repository\ProductRanking\ProductRankingRepository;

class ProductRankingController extends Controller
{

    protected $productranking;

    public function __construct(ProductRankingRepository $productranking)
    {
        $this->productranking = $productranking;
    }
    public function createProductRanking(ProductRankingCreateRequest $request)
    {
        $query = $this->productranking->createData($request->all());
        return response()->json($query); 
    }
    public function getProductRankingList(ProductRankingGetRequest $request)
    {
        $query = $this->productranking->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteProductRanking(ProductRankingDeleteRequest $request)
    {   
        $query = $this->productranking->delete($request->all());
        return response()->json($query);
    }
    public function updateProductRanking(ProductRankingUpdateRequest $request)
    {
        $query = $this->productranking->updateData($request->all());
        return response()->json($query);   
    }

}
