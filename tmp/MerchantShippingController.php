<?php
namespace App\Http\Controllers\MerchantShipping;

use App\Http\Controllers\Controller;
use App\Http\Requests\MerchantShipping\MerchantShippingRequest;
use App\Http\Requests\MerchantShipping\MerchantShippingGetRequest;
use App\Http\Requests\MerchantShipping\MerchantShippingCreateRequest;
use App\Http\Requests\MerchantShipping\MerchantShippingUpdateRequest;
use App\Http\Requests\MerchantShipping\MerchantShippingDeleteRequest;
use App\Repository\MerchantShipping\MerchantShippingRepository;

class MerchantShippingController extends Controller
{

    protected $merchantshipping;

    public function __construct(MerchantShippingRepository $merchantshipping)
    {
        $this->merchantshipping = $merchantshipping;
    }
    public function createMerchantShipping(MerchantShippingCreateRequest $request)
    {
        $query = $this->merchantshipping->createData($request->all());
        return response()->json($query); 
    }
    public function getMerchantShippingList(MerchantShippingGetRequest $request)
    {
        $query = $this->merchantshipping->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteMerchantShipping(MerchantShippingDeleteRequest $request)
    {   
        $query = $this->merchantshipping->delete($request->all());
        return response()->json($query);
    }
    public function updateMerchantShipping(MerchantShippingUpdateRequest $request)
    {
        $query = $this->merchantshipping->updateData($request->all());
        return response()->json($query);   
    }

}
