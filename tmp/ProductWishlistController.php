<?php
namespace App\Http\Controllers\ProductWishlist;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductWishlist\ProductWishlistRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistGetRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistCreateRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistUpdateRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistDeleteRequest;
use App\Repository\ProductWishlist\ProductWishlistRepository;

class ProductWishlistController extends Controller
{

    protected $productwishlist;

    public function __construct(ProductWishlistRepository $productwishlist)
    {
        $this->productwishlist = $productwishlist;
    }
    public function createProductWishlist(ProductWishlistCreateRequest $request)
    {
        $query = $this->productwishlist->createData($request->all());
        return response()->json($query); 
    }
    public function getProductWishlistList(ProductWishlistGetRequest $request)
    {
        $query = $this->productwishlist->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteProductWishlist(ProductWishlistDeleteRequest $request)
    {   
        $query = $this->productwishlist->delete($request->all());
        return response()->json($query);
    }
    public function updateProductWishlist(ProductWishlistUpdateRequest $request)
    {
        $query = $this->productwishlist->updateData($request->all());
        return response()->json($query);   
    }

}
