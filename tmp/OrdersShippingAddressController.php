<?php
namespace App\Http\Controllers\OrdersShippingAddress;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersShippingAddress\OrdersShippingAddressRequest;
use App\Http\Requests\OrdersShippingAddress\OrdersShippingAddressGetRequest;
use App\Http\Requests\OrdersShippingAddress\OrdersShippingAddressCreateRequest;
use App\Http\Requests\OrdersShippingAddress\OrdersShippingAddressUpdateRequest;
use App\Http\Requests\OrdersShippingAddress\OrdersShippingAddressDeleteRequest;
use App\Repository\OrdersShippingAddress\OrdersShippingAddressRepository;

class OrdersShippingAddressController extends Controller
{

    protected $ordersshippingaddress;

    public function __construct(OrdersShippingAddressRepository $ordersshippingaddress)
    {
        $this->ordersshippingaddress = $ordersshippingaddress;
    }
    public function createOrdersShippingAddress(OrdersShippingAddressCreateRequest $request)
    {
        $query = $this->ordersshippingaddress->createData($request->all());
        return response()->json($query); 
    }
    public function getOrdersShippingAddressList(OrdersShippingAddressGetRequest $request)
    {
        $query = $this->ordersshippingaddress->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOrdersShippingAddress(OrdersShippingAddressDeleteRequest $request)
    {   
        $query = $this->ordersshippingaddress->delete($request->all());
        return response()->json($query);
    }
    public function updateOrdersShippingAddress(OrdersShippingAddressUpdateRequest $request)
    {
        $query = $this->ordersshippingaddress->updateData($request->all());
        return response()->json($query);   
    }

}
