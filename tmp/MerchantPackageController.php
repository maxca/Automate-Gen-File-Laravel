<?php
namespace App\Http\Controllers\MerchantPackage;

use App\Http\Controllers\Controller;
use App\Http\Requests\MerchantPackage\MerchantPackageRequest;
use App\Http\Requests\MerchantPackage\MerchantPackageGetRequest;
use App\Http\Requests\MerchantPackage\MerchantPackageCreateRequest;
use App\Http\Requests\MerchantPackage\MerchantPackageUpdateRequest;
use App\Http\Requests\MerchantPackage\MerchantPackageDeleteRequest;
use App\Repository\MerchantPackage\MerchantPackageRepository;

class MerchantPackageController extends Controller
{

    protected $merchantpackage;

    public function __construct(MerchantPackageRepository $merchantpackage)
    {
        $this->merchantpackage = $merchantpackage;
    }
    public function createMerchantPackage(MerchantPackageCreateRequest $request)
    {
        $query = $this->merchantpackage->createData($request->all());
        return response()->json($query); 
    }
    public function getMerchantPackageList(MerchantPackageGetRequest $request)
    {
        $query = $this->merchantpackage->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteMerchantPackage(MerchantPackageDeleteRequest $request)
    {   
        $query = $this->merchantpackage->delete($request->all());
        return response()->json($query);
    }
    public function updateMerchantPackage(MerchantPackageUpdateRequest $request)
    {
        $query = $this->merchantpackage->updateData($request->all());
        return response()->json($query);   
    }

}
