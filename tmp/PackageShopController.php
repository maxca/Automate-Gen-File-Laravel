<?php
namespace App\Http\Controllers\PackageShop;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageShop\PackageShopRequest;
use App\Http\Requests\PackageShop\PackageShopGetRequest;
use App\Http\Requests\PackageShop\PackageShopCreateRequest;
use App\Http\Requests\PackageShop\PackageShopUpdateRequest;
use App\Http\Requests\PackageShop\PackageShopDeleteRequest;
use App\Repository\PackageShop\PackageShopRepository;

class PackageShopController extends Controller
{

    protected $packageshop;

    public function __construct(PackageShopRepository $packageshop)
    {
        $this->packageshop = $packageshop;
    }
    public function createPackageShop(PackageShopCreateRequest $request)
    {
        $query = $this->packageshop->createData($request->all());
        return response()->json($query); 
    }
    public function getPackageShopList(PackageShopGetRequest $request)
    {
        $query = $this->packageshop->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deletePackageShop(PackageShopDeleteRequest $request)
    {   
        $query = $this->packageshop->delete($request->all());
        return response()->json($query);
    }
    public function updatePackageShop(PackageShopUpdateRequest $request)
    {
        $query = $this->packageshop->updateData($request->all());
        return response()->json($query);   
    }

}
