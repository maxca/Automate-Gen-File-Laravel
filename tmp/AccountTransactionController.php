<?php
namespace App\Http\Controllers\AccountTransaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountTransaction\AccountTransactionRequest;
use App\Http\Requests\AccountTransaction\AccountTransactionGetRequest;
use App\Http\Requests\AccountTransaction\AccountTransactionCreateRequest;
use App\Http\Requests\AccountTransaction\AccountTransactionUpdateRequest;
use App\Http\Requests\AccountTransaction\AccountTransactionDeleteRequest;
use App\Repository\AccountTransaction\AccountTransactionRepository;

class AccountTransactionController extends Controller
{

    protected $accounttransaction;

    public function __construct(AccountTransactionRepository $accounttransaction)
    {
        $this->accounttransaction = $accounttransaction;
    }
    public function createAccountTransaction(AccountTransactionCreateRequest $request)
    {
        $query = $this->accounttransaction->createData($request->all());
        return response()->json($query); 
    }
    public function getAccountTransactionList(AccountTransactionGetRequest $request)
    {
        $query = $this->accounttransaction->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteAccountTransaction(AccountTransactionDeleteRequest $request)
    {   
        $query = $this->accounttransaction->delete($request->all());
        return response()->json($query);
    }
    public function updateAccountTransaction(AccountTransactionUpdateRequest $request)
    {
        $query = $this->accounttransaction->updateData($request->all());
        return response()->json($query);   
    }

}
