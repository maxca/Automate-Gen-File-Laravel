<?php
namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payments\PaymentsRequest;
use App\Http\Requests\Payments\PaymentsGetRequest;
use App\Http\Requests\Payments\PaymentsCreateRequest;
use App\Http\Requests\Payments\PaymentsUpdateRequest;
use App\Http\Requests\Payments\PaymentsDeleteRequest;
use App\Repository\Payments\PaymentsRepository;

class PaymentsController extends Controller
{

    protected $payments;

    public function __construct(PaymentsRepository $payments)
    {
        $this->payments = $payments;
    }
    public function createPayments(PaymentsCreateRequest $request)
    {
        $query = $this->payments->createData($request->all());
        return response()->json($query); 
    }
    public function getPaymentsList(PaymentsGetRequest $request)
    {
        $query = $this->payments->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deletePayments(PaymentsDeleteRequest $request)
    {   
        $query = $this->payments->delete($request->all());
        return response()->json($query);
    }
    public function updatePayments(PaymentsUpdateRequest $request)
    {
        $query = $this->payments->updateData($request->all());
        return response()->json($query);   
    }

}
