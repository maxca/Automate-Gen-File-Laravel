<?php
namespace App\Http\Controllers\OrdersInstallment;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersInstallment\OrdersInstallmentRequest;
use App\Http\Requests\OrdersInstallment\OrdersInstallmentGetRequest;
use App\Http\Requests\OrdersInstallment\OrdersInstallmentCreateRequest;
use App\Http\Requests\OrdersInstallment\OrdersInstallmentUpdateRequest;
use App\Http\Requests\OrdersInstallment\OrdersInstallmentDeleteRequest;
use App\Repository\OrdersInstallment\OrdersInstallmentRepository;

class OrdersInstallmentController extends Controller
{

    protected $ordersinstallment;

    public function __construct(OrdersInstallmentRepository $ordersinstallment)
    {
        $this->ordersinstallment = $ordersinstallment;
    }
    public function createOrdersInstallment(OrdersInstallmentCreateRequest $request)
    {
        $query = $this->ordersinstallment->createData($request->all());
        return response()->json($query); 
    }
    public function getOrdersInstallmentList(OrdersInstallmentGetRequest $request)
    {
        $query = $this->ordersinstallment->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOrdersInstallment(OrdersInstallmentDeleteRequest $request)
    {   
        $query = $this->ordersinstallment->delete($request->all());
        return response()->json($query);
    }
    public function updateOrdersInstallment(OrdersInstallmentUpdateRequest $request)
    {
        $query = $this->ordersinstallment->updateData($request->all());
        return response()->json($query);   
    }

}
