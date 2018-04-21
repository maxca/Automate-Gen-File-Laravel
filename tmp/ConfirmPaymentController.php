<?php
namespace App\Http\Controllers\ConfirmPayment;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfirmPayment\ConfirmPaymentRequest;
use App\Http\Requests\ConfirmPayment\ConfirmPaymentGetRequest;
use App\Http\Requests\ConfirmPayment\ConfirmPaymentCreateRequest;
use App\Http\Requests\ConfirmPayment\ConfirmPaymentUpdateRequest;
use App\Http\Requests\ConfirmPayment\ConfirmPaymentDeleteRequest;
use App\Repository\ConfirmPayment\ConfirmPaymentRepository;

class ConfirmPaymentController extends Controller
{

    protected $confirmpayment;

    public function __construct(ConfirmPaymentRepository $confirmpayment)
    {
        $this->confirmpayment = $confirmpayment;
    }
    public function createConfirmPayment(ConfirmPaymentCreateRequest $request)
    {
        $query = $this->confirmpayment->createData($request->all());
        return response()->json($query); 
    }
    public function getConfirmPaymentList(ConfirmPaymentGetRequest $request)
    {
        $query = $this->confirmpayment->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteConfirmPayment(ConfirmPaymentDeleteRequest $request)
    {   
        $query = $this->confirmpayment->delete($request->all());
        return response()->json($query);
    }
    public function updateConfirmPayment(ConfirmPaymentUpdateRequest $request)
    {
        $query = $this->confirmpayment->updateData($request->all());
        return response()->json($query);   
    }

}
