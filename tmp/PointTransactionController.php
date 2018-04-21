<?php
namespace App\Http\Controllers\PointTransaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\PointTransaction\PointTransactionRequest;
use App\Http\Requests\PointTransaction\PointTransactionGetRequest;
use App\Http\Requests\PointTransaction\PointTransactionCreateRequest;
use App\Http\Requests\PointTransaction\PointTransactionUpdateRequest;
use App\Http\Requests\PointTransaction\PointTransactionDeleteRequest;
use App\Repository\PointTransaction\PointTransactionRepository;

class PointTransactionController extends Controller
{

    protected $pointtransaction;

    public function __construct(PointTransactionRepository $pointtransaction)
    {
        $this->pointtransaction = $pointtransaction;
    }
    public function createPointTransaction(PointTransactionCreateRequest $request)
    {
        $query = $this->pointtransaction->createData($request->all());
        return response()->json($query); 
    }
    public function getPointTransactionList(PointTransactionGetRequest $request)
    {
        $query = $this->pointtransaction->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deletePointTransaction(PointTransactionDeleteRequest $request)
    {   
        $query = $this->pointtransaction->delete($request->all());
        return response()->json($query);
    }
    public function updatePointTransaction(PointTransactionUpdateRequest $request)
    {
        $query = $this->pointtransaction->updateData($request->all());
        return response()->json($query);   
    }

}
