<?php
namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wishlist\WishlistRequest;
use App\Http\Requests\Wishlist\WishlistGetRequest;
use App\Http\Requests\Wishlist\WishlistCreateRequest;
use App\Http\Requests\Wishlist\WishlistUpdateRequest;
use App\Http\Requests\Wishlist\WishlistDeleteRequest;
use App\Repository\Wishlist\WishlistRepository;

class WishlistController extends Controller
{

    protected $wishlist;

    public function __construct(WishlistRepository $wishlist)
    {
        $this->wishlist = $wishlist;
    }
    public function createWishlist(WishlistCreateRequest $request)
    {
        $query = $this->wishlist->createData($request->all());
        return response()->json($query); 
    }
    public function getWishlistList(WishlistGetRequest $request)
    {
        $query = $this->wishlist->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteWishlist(WishlistDeleteRequest $request)
    {   
        $query = $this->wishlist->delete($request->all());
        return response()->json($query);
    }
    public function updateWishlist(WishlistUpdateRequest $request)
    {
        $query = $this->wishlist->updateData($request->all());
        return response()->json($query);   
    }

}
