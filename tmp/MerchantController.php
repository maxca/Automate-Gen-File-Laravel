<?php
namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Merchant\MerchantRequest;
use App\Http\Requests\Merchant\MerchantGetRequest;
use App\Http\Requests\Merchant\MerchantCreateRequest;
use App\Http\Requests\Merchant\MerchantUpdateRequest;
use App\Http\Requests\Merchant\MerchantDeleteRequest;
use App\Repository\Merchant\MerchantRepository;

class MerchantController extends Controller
{

    protected $merchant;

    public function __construct(MerchantRepository $merchant)
    {
        $this->merchant = $merchant;
    }
    public function createMerchant(MerchantCreateRequest $request)
    {
        $query = $this->merchant->createData($request->all());
        return response()->json($query); 
    }
    public function getMerchantList(MerchantGetRequest $request)
    {
        $query = $this->merchant->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteMerchant(MerchantDeleteRequest $request)
    {   
        $query = $this->merchant->delete($request->all());
        return response()->json($query);
    }
    public function updateMerchant(MerchantUpdateRequest $request)
    {
        $query = $this->merchant->updateData($request->all());
        return response()->json($query);   
    }

}
