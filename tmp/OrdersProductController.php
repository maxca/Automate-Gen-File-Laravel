<?php
namespace App\Http\Controllers\OrdersProduct;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersProduct\OrdersProductRequest;
use App\Http\Requests\OrdersProduct\OrdersProductGetRequest;
use App\Http\Requests\OrdersProduct\OrdersProductCreateRequest;
use App\Http\Requests\OrdersProduct\OrdersProductUpdateRequest;
use App\Http\Requests\OrdersProduct\OrdersProductDeleteRequest;
use App\Repository\OrdersProduct\OrdersProductRepository;

class OrdersProductController extends Controller
{

    protected $ordersproduct;

    public function __construct(OrdersProductRepository $ordersproduct)
    {
        $this->ordersproduct = $ordersproduct;
    }
    public function createOrdersProduct(OrdersProductCreateRequest $request)
    {
        $query = $this->ordersproduct->createData($request->all());
        return response()->json($query); 
    }
    public function getOrdersProductList(OrdersProductGetRequest $request)
    {
        $query = $this->ordersproduct->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOrdersProduct(OrdersProductDeleteRequest $request)
    {   
        $query = $this->ordersproduct->delete($request->all());
        return response()->json($query);
    }
    public function updateOrdersProduct(OrdersProductUpdateRequest $request)
    {
        $query = $this->ordersproduct->updateData($request->all());
        return response()->json($query);   
    }

}
