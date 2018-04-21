<?php
namespace App\Http\Controllers\Merchant_register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Merchant_register\Merchant_registerRequest;
use App\Http\Requests\Merchant_register\Merchant_registerGetRequest;
use App\Http\Requests\Merchant_register\Merchant_registerCreateRequest;
use App\Http\Requests\Merchant_register\Merchant_registerUpdateRequest;
use App\Http\Requests\Merchant_register\Merchant_registerDeleteRequest;
use App\Repository\Merchant_register\Merchant_registerRepository;

class Merchant_registerController extends Controller
{

    protected $merchant_register;

    public function __construct(Merchant_registerRepository $merchant_register)
    {
        $this->merchant_register = $merchant_register;
    }
    public function createMerchant_register(Merchant_registerCreateRequest $request)
    {
        $query = $this->merchant_register->createData($request->all());
        return response()->json($query); 
    }
    public function getMerchant_registerList(Merchant_registerGetRequest $request)
    {
        $query = $this->merchant_register->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteMerchant_register(Merchant_registerDeleteRequest $request)
    {   
        $query = $this->merchant_register->delete($request->all());
        return response()->json($query);
    }
    public function updateMerchant_register(Merchant_registerUpdateRequest $request)
    {
        $query = $this->merchant_register->updateData($request->all());
        return response()->json($query);   
    }

}
