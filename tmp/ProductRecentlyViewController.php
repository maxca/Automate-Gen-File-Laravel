<?php
namespace App\Http\Controllers\ProductRecentlyView;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRecentlyView\ProductRecentlyViewRequest;
use App\Http\Requests\ProductRecentlyView\ProductRecentlyViewGetRequest;
use App\Http\Requests\ProductRecentlyView\ProductRecentlyViewCreateRequest;
use App\Http\Requests\ProductRecentlyView\ProductRecentlyViewUpdateRequest;
use App\Http\Requests\ProductRecentlyView\ProductRecentlyViewDeleteRequest;
use App\Repository\ProductRecentlyView\ProductRecentlyViewRepository;

class ProductRecentlyViewController extends Controller
{

    protected $productrecentlyview;

    public function __construct(ProductRecentlyViewRepository $productrecentlyview)
    {
        $this->productrecentlyview = $productrecentlyview;
    }
    public function createProductRecentlyView(ProductRecentlyViewCreateRequest $request)
    {
        $query = $this->productrecentlyview->createData($request->all());
        return response()->json($query); 
    }
    public function getProductRecentlyViewList(ProductRecentlyViewGetRequest $request)
    {
        $query = $this->productrecentlyview->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteProductRecentlyView(ProductRecentlyViewDeleteRequest $request)
    {   
        $query = $this->productrecentlyview->delete($request->all());
        return response()->json($query);
    }
    public function updateProductRecentlyView(ProductRecentlyViewUpdateRequest $request)
    {
        $query = $this->productrecentlyview->updateData($request->all());
        return response()->json($query);   
    }

}
