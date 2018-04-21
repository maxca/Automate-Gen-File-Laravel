<?php
namespace App\Http\Controllers\OrderSummary;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderSummary\OrderSummaryRequest;
use App\Http\Requests\OrderSummary\OrderSummaryGetRequest;
use App\Http\Requests\OrderSummary\OrderSummaryCreateRequest;
use App\Http\Requests\OrderSummary\OrderSummaryUpdateRequest;
use App\Http\Requests\OrderSummary\OrderSummaryDeleteRequest;
use App\Repository\OrderSummary\OrderSummaryRepository;

class OrderSummaryController extends Controller
{

    protected $ordersummary;

    public function __construct(OrderSummaryRepository $ordersummary)
    {
        $this->ordersummary = $ordersummary;
    }
    public function createOrderSummary(OrderSummaryCreateRequest $request)
    {
        $query = $this->ordersummary->createData($request->all());
        return response()->json($query); 
    }
    public function getOrderSummaryList(OrderSummaryGetRequest $request)
    {
        $query = $this->ordersummary->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOrderSummary(OrderSummaryDeleteRequest $request)
    {   
        $query = $this->ordersummary->delete($request->all());
        return response()->json($query);
    }
    public function updateOrderSummary(OrderSummaryUpdateRequest $request)
    {
        $query = $this->ordersummary->updateData($request->all());
        return response()->json($query);   
    }

}
