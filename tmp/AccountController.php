<?php
namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\AccountRequest;
use App\Http\Requests\Account\AccountGetRequest;
use App\Http\Requests\Account\AccountCreateRequest;
use App\Http\Requests\Account\AccountUpdateRequest;
use App\Http\Requests\Account\AccountDeleteRequest;
use App\Repository\Account\AccountRepository;

class AccountController extends Controller
{

    protected $account;

    public function __construct(AccountRepository $account)
    {
        $this->account = $account;
    }
    public function createAccount(AccountCreateRequest $request)
    {
        $query = $this->account->createData($request->all());
        return response()->json($query); 
    }
    public function getAccountList(AccountGetRequest $request)
    {
        $query = $this->account->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteAccount(AccountDeleteRequest $request)
    {   
        $query = $this->account->delete($request->all());
        return response()->json($query);
    }
    public function updateAccount(AccountUpdateRequest $request)
    {
        $query = $this->account->updateData($request->all());
        return response()->json($query);   
    }

}
