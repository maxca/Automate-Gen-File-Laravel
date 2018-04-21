<?php

namespace App\Http\Controllers\Backend\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\OrdersCreateRequest;
use App\Http\Requests\Orders\OrdersDeleteRequest;
use App\Http\Requests\Orders\OrdersGetUpdateRequest;
use App\Http\Requests\Orders\OrdersGetDetailRequest;
use App\Http\Requests\Orders\OrdersUpdateRequest;
use App\Repositories\Orders\OrdersRepository;

class OrdersController extends Controller
{
    /**
     * Orders repository
     * @var object
     */
    protected $orders;

    public function __construct(OrdersRepository $orders)
    {
        $this->orders = $orders;
    }
    /**
     * get Orders show list
     * @return view
     */
    public function getOrdersList()
    {
        return $this->orders->getList();
    }

    /**
     * get Orders form create data
     * @return view
     */
    public function getFormOrdersCreate()
    {
        return $this->orders->getCreateForm();
    }

    /**
     * get Orders form update data
     * @param  GetUpdateOrdersRequest $request
     * @return view
     */
    public function getFormOrdersUpdate(OrdersGetUpdateRequest $request)
    {
        return $this->orders->getUpdateForm($request->id);
    }

    /**
     * get Orders form detail data
     * @return [type] [description]
     */
    public function getOrdersDetail(OrdersGetDetailRequest $request)
    {
        return $this->orders->getFormDetail($request->id);
    }

    /**
     * submit create Orders data to api
     * @param  CreateOrdersRequest $request
     * @return redirect back with flash success
     */
    public function submitFormOrdersCreate(OrdersCreateRequest $request)
    {
        $this->orders->createDataApi($request->all());
        return redirect()->route('orders.view')
            ->withFlashSuccess('create orders data success');
    }

    /**
     * submit update Orders data to api
     * @param  UpdateOrdersRequest $request
     * @return redirect back with flash success
     */
    public function submitFormOrdersUpdate(OrdersUpdateRequest $request)
    {
        $this->orders->updateDataApi($request->id, $request->all());
        return redirect()->route('orders.view')
            ->withFlashSuccess('update orders data success');
    }

    /**
     * submit delete Orders data to api
     * @param  DeleteOrdersRequest $request
     * @return redirect back with flash success
     */
    public function submitFormOrdersDelete(OrdersDeleteRequest $request)
    {
        $this->orders->deleteDataApi($request->id);
        return redirect()->route('orders.view')
            ->withFlashSuccess('delete orders data success');
    }
}
