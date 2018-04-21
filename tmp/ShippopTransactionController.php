<?php
namespace App\Http\Controllers\ShippopTransaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShippopTransaction\ShippopTransactionRequest;
use App\Http\Requests\ShippopTransaction\ShippopTransactionGetRequest;
use App\Http\Requests\ShippopTransaction\ShippopTransactionCreateRequest;
use App\Http\Requests\ShippopTransaction\ShippopTransactionUpdateRequest;
use App\Http\Requests\ShippopTransaction\ShippopTransactionDeleteRequest;
use App\Repository\ShippopTransaction\ShippopTransactionRepository;

class ShippopTransactionController extends Controller
{

    protected $shippoptransaction;

    public function __construct(ShippopTransactionRepository $shippoptransaction)
    {
        $this->shippoptransaction = $shippoptransaction;
    }
    public function createShippopTransaction(ShippopTransactionCreateRequest $request)
    {
        $query = $this->shippoptransaction->createData($request->all());
        return response()->json($query); 
    }
    public function getShippopTransactionList(ShippopTransactionGetRequest $request)
    {
        $query = $this->shippoptransaction->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteShippopTransaction(ShippopTransactionDeleteRequest $request)
    {   
        $query = $this->shippoptransaction->delete($request->all());
        return response()->json($query);
    }
    public function updateShippopTransaction(ShippopTransactionUpdateRequest $request)
    {
        $query = $this->shippoptransaction->updateData($request->all());
        return response()->json($query);   
    }

}
