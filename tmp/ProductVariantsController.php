<?php
namespace App\Http\Controllers\ProductVariants;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductVariants\ProductVariantsRequest;
use App\Http\Requests\ProductVariants\ProductVariantsGetRequest;
use App\Http\Requests\ProductVariants\ProductVariantsCreateRequest;
use App\Http\Requests\ProductVariants\ProductVariantsUpdateRequest;
use App\Http\Requests\ProductVariants\ProductVariantsDeleteRequest;
use App\Repository\ProductVariants\ProductVariantsRepository;

class ProductVariantsController extends Controller
{

    protected $productvariants;

    public function __construct(ProductVariantsRepository $productvariants)
    {
        $this->productvariants = $productvariants;
    }
    public function createProductVariants(ProductVariantsCreateRequest $request)
    {
        $query = $this->productvariants->createData($request->all());
        return response()->json($query); 
    }
    public function getProductVariantsList(ProductVariantsGetRequest $request)
    {
        $query = $this->productvariants->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteProductVariants(ProductVariantsDeleteRequest $request)
    {   
        $query = $this->productvariants->delete($request->all());
        return response()->json($query);
    }
    public function updateProductVariants(ProductVariantsUpdateRequest $request)
    {
        $query = $this->productvariants->updateData($request->all());
        return response()->json($query);   
    }

}
