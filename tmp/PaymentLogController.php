<?php
namespace App\Http\Controllers\PaymentLog;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentLog\PaymentLogRequest;
use App\Http\Requests\PaymentLog\PaymentLogGetRequest;
use App\Http\Requests\PaymentLog\PaymentLogCreateRequest;
use App\Http\Requests\PaymentLog\PaymentLogUpdateRequest;
use App\Http\Requests\PaymentLog\PaymentLogDeleteRequest;
use App\Repository\PaymentLog\PaymentLogRepository;

class PaymentLogController extends Controller
{

    protected $paymentlog;

    public function __construct(PaymentLogRepository $paymentlog)
    {
        $this->paymentlog = $paymentlog;
    }
    public function createPaymentLog(PaymentLogCreateRequest $request)
    {
        $query = $this->paymentlog->createData($request->all());
        return response()->json($query); 
    }
    public function getPaymentLogList(PaymentLogGetRequest $request)
    {
        $query = $this->paymentlog->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deletePaymentLog(PaymentLogDeleteRequest $request)
    {   
        $query = $this->paymentlog->delete($request->all());
        return response()->json($query);
    }
    public function updatePaymentLog(PaymentLogUpdateRequest $request)
    {
        $query = $this->paymentlog->updateData($request->all());
        return response()->json($query);   
    }

}
