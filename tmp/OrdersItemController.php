<?php
namespace App\Http\Controllers\OrdersItem;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersItem\OrdersItemRequest;
use App\Http\Requests\OrdersItem\OrdersItemGetRequest;
use App\Http\Requests\OrdersItem\OrdersItemCreateRequest;
use App\Http\Requests\OrdersItem\OrdersItemUpdateRequest;
use App\Http\Requests\OrdersItem\OrdersItemDeleteRequest;
use App\Repository\OrdersItem\OrdersItemRepository;

class OrdersItemController extends Controller
{

    protected $ordersitem;

    public function __construct(OrdersItemRepository $ordersitem)
    {
        $this->ordersitem = $ordersitem;
    }
    public function createOrdersItem(OrdersItemCreateRequest $request)
    {
        $query = $this->ordersitem->createData($request->all());
        return response()->json($query); 
    }
    public function getOrdersItemList(OrdersItemGetRequest $request)
    {
        $query = $this->ordersitem->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOrdersItem(OrdersItemDeleteRequest $request)
    {   
        $query = $this->ordersitem->delete($request->all());
        return response()->json($query);
    }
    public function updateOrdersItem(OrdersItemUpdateRequest $request)
    {
        $query = $this->ordersitem->updateData($request->all());
        return response()->json($query);   
    }

}
