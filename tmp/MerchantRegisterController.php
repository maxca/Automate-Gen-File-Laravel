<?php
namespace App\Http\Controllers\MerchantRegister;

use App\Http\Controllers\Controller;
use App\Http\Requests\MerchantRegister\MerchantRegisterRequest;
use App\Http\Requests\MerchantRegister\MerchantRegisterGetRequest;
use App\Http\Requests\MerchantRegister\MerchantRegisterCreateRequest;
use App\Http\Requests\MerchantRegister\MerchantRegisterUpdateRequest;
use App\Http\Requests\MerchantRegister\MerchantRegisterDeleteRequest;
use App\Repository\MerchantRegister\MerchantRegisterRepository;

class MerchantRegisterController extends Controller
{

    protected $merchantregister;

    public function __construct(MerchantRegisterRepository $merchantregister)
    {
        $this->merchantregister = $merchantregister;
    }
    public function createMerchantRegister(MerchantRegisterCreateRequest $request)
    {
        $query = $this->merchantregister->createData($request->all());
        return response()->json($query); 
    }
    public function getMerchantRegisterList(MerchantRegisterGetRequest $request)
    {
        $query = $this->merchantregister->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteMerchantRegister(MerchantRegisterDeleteRequest $request)
    {   
        $query = $this->merchantregister->delete($request->all());
        return response()->json($query);
    }
    public function updateMerchantRegister(MerchantRegisterUpdateRequest $request)
    {
        $query = $this->merchantregister->updateData($request->all());
        return response()->json($query);   
    }

}
