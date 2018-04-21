<?php
namespace App\Http\Controllers\OrdersMerchant;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersMerchant\OrdersMerchantRequest;
use App\Http\Requests\OrdersMerchant\OrdersMerchantGetRequest;
use App\Http\Requests\OrdersMerchant\OrdersMerchantCreateRequest;
use App\Http\Requests\OrdersMerchant\OrdersMerchantUpdateRequest;
use App\Http\Requests\OrdersMerchant\OrdersMerchantDeleteRequest;
use App\Repository\OrdersMerchant\OrdersMerchantRepository;

class OrdersMerchantController extends Controller
{

    protected $ordersmerchant;

    public function __construct(OrdersMerchantRepository $ordersmerchant)
    {
        $this->ordersmerchant = $ordersmerchant;
    }
    public function createOrdersMerchant(OrdersMerchantCreateRequest $request)
    {
        $query = $this->ordersmerchant->createData($request->all());
        return response()->json($query); 
    }
    public function getOrdersMerchantList(OrdersMerchantGetRequest $request)
    {
        $query = $this->ordersmerchant->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOrdersMerchant(OrdersMerchantDeleteRequest $request)
    {   
        $query = $this->ordersmerchant->delete($request->all());
        return response()->json($query);
    }
    public function updateOrdersMerchant(OrdersMerchantUpdateRequest $request)
    {
        $query = $this->ordersmerchant->updateData($request->all());
        return response()->json($query);   
    }

}
