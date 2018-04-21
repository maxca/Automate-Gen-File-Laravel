<?php
namespace App\Http\Controllers\Promotions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Promotions\PromotionsRequest;
use App\Http\Requests\Promotions\PromotionsGetRequest;
use App\Http\Requests\Promotions\PromotionsCreateRequest;
use App\Http\Requests\Promotions\PromotionsUpdateRequest;
use App\Http\Requests\Promotions\PromotionsDeleteRequest;
use App\Repository\Promotions\PromotionsRepository;

class PromotionsController extends Controller
{

    protected $promotions;

    public function __construct(PromotionsRepository $promotions)
    {
        $this->promotions = $promotions;
    }
    public function createPromotions(PromotionsCreateRequest $request)
    {
        $query = $this->promotions->createData($request->all());
        return response()->json($query); 
    }
    public function getPromotionsList(PromotionsGetRequest $request)
    {
        $query = $this->promotions->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deletePromotions(PromotionsDeleteRequest $request)
    {   
        $query = $this->promotions->delete($request->all());
        return response()->json($query);
    }
    public function updatePromotions(PromotionsUpdateRequest $request)
    {
        $query = $this->promotions->updateData($request->all());
        return response()->json($query);   
    }

}
