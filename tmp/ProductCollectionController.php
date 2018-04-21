<?php
namespace App\Http\Controllers\ProductCollection;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCollection\ProductCollectionRequest;
use App\Http\Requests\ProductCollection\ProductCollectionGetRequest;
use App\Http\Requests\ProductCollection\ProductCollectionCreateRequest;
use App\Http\Requests\ProductCollection\ProductCollectionUpdateRequest;
use App\Http\Requests\ProductCollection\ProductCollectionDeleteRequest;
use App\Repository\ProductCollection\ProductCollectionRepository;

class ProductCollectionController extends Controller
{

    protected $productcollection;

    public function __construct(ProductCollectionRepository $productcollection)
    {
        $this->productcollection = $productcollection;
    }
    public function createProductCollection(ProductCollectionCreateRequest $request)
    {
        $query = $this->productcollection->createData($request->all());
        return response()->json($query); 
    }
    public function getProductCollectionList(ProductCollectionGetRequest $request)
    {
        $query = $this->productcollection->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteProductCollection(ProductCollectionDeleteRequest $request)
    {   
        $query = $this->productcollection->delete($request->all());
        return response()->json($query);
    }
    public function updateProductCollection(ProductCollectionUpdateRequest $request)
    {
        $query = $this->productcollection->updateData($request->all());
        return response()->json($query);   
    }

}
