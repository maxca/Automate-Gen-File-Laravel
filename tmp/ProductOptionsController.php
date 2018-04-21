<?php
namespace App\Http\Controllers\ProductOptions;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductOptions\ProductOptionsRequest;
use App\Http\Requests\ProductOptions\ProductOptionsGetRequest;
use App\Http\Requests\ProductOptions\ProductOptionsCreateRequest;
use App\Http\Requests\ProductOptions\ProductOptionsUpdateRequest;
use App\Http\Requests\ProductOptions\ProductOptionsDeleteRequest;
use App\Repository\ProductOptions\ProductOptionsRepository;

class ProductOptionsController extends Controller
{

    protected $productoptions;

    public function __construct(ProductOptionsRepository $productoptions)
    {
        $this->productoptions = $productoptions;
    }
    public function createProductOptions(ProductOptionsCreateRequest $request)
    {
        $query = $this->productoptions->createData($request->all());
        return response()->json($query); 
    }
    public function getProductOptionsList(ProductOptionsGetRequest $request)
    {
        $query = $this->productoptions->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteProductOptions(ProductOptionsDeleteRequest $request)
    {   
        $query = $this->productoptions->delete($request->all());
        return response()->json($query);
    }
    public function updateProductOptions(ProductOptionsUpdateRequest $request)
    {
        $query = $this->productoptions->updateData($request->all());
        return response()->json($query);   
    }

}
