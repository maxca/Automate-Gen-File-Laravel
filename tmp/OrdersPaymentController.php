<?php
namespace App\Http\Controllers\OrdersPayment;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersPayment\OrdersPaymentRequest;
use App\Http\Requests\OrdersPayment\OrdersPaymentGetRequest;
use App\Http\Requests\OrdersPayment\OrdersPaymentCreateRequest;
use App\Http\Requests\OrdersPayment\OrdersPaymentUpdateRequest;
use App\Http\Requests\OrdersPayment\OrdersPaymentDeleteRequest;
use App\Repository\OrdersPayment\OrdersPaymentRepository;

class OrdersPaymentController extends Controller
{

    protected $orderspayment;

    public function __construct(OrdersPaymentRepository $orderspayment)
    {
        $this->orderspayment = $orderspayment;
    }
    public function createOrdersPayment(OrdersPaymentCreateRequest $request)
    {
        $query = $this->orderspayment->createData($request->all());
        return response()->json($query); 
    }
    public function getOrdersPaymentList(OrdersPaymentGetRequest $request)
    {
        $query = $this->orderspayment->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOrdersPayment(OrdersPaymentDeleteRequest $request)
    {   
        $query = $this->orderspayment->delete($request->all());
        return response()->json($query);
    }
    public function updateOrdersPayment(OrdersPaymentUpdateRequest $request)
    {
        $query = $this->orderspayment->updateData($request->all());
        return response()->json($query);   
    }

}
