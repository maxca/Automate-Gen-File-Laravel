<?php
namespace App\Http\Controllers\ProductWishlist;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductWishlist\ProductWishlistGetDetailViewRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistGetEditViewRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistGetViewRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistPostCreateAjaxRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistPostCreateRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistPostDeleteAjaxRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistPostDeleteRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistPostUpdateAjaxRequest;
use App\Http\Requests\ProductWishlist\ProductWishlistPostUpdateRequest;
use App\Repository\ProductWishlist\ProductWishlistRepository;

class ProductWishlistController extends Controller
{
    /**
     * productwishlist repository
     * @var object class
     */
    protected $productwishlist;

    public function __construct(ProductWishlistRepository $productwishlist)
    {
        $this->productwishlist = $productwishlist;
    }

    /**
     * [getProductWishlistListView]
     * @param  ProductWishlistGetViewRequest $request [validation]
     * @return view object
     */
    public function getProductWishlistListView()
    {
        return $this->productwishlist->getViewList();
    }

    /**
     * [getProductWishlistDetailView]
     * @param  ProductWishlistGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getProductWishlistDetailView(ProductWishlistGetDetailViewRequest $request)
    {
        return $this->productwishlist->getViewDetail($request->id);
    }

    /**
     * [getProductWishlistEditView]
     * @param  ProductWishlistGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getProductWishlistEditView(ProductWishlistGetEditViewRequest $request)
    {
        return $this->productwishlist->getViewEdit($request->id);
    }

    /**
     * [getProductWishlistCreateView]
     * @return view object
     */
    public function getProductWishlistCreateView()
    {
        return $this->productwishlist->getViewCreate();
    }

    /**
     * [postProductWishlistCreate]
     * @param  ProductWishlistPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postProductWishlistCreate(ProductWishlistPostCreateRequest $request)
    {
        $this->productwishlist->createData($request->all());
        return redirect()->route('product_wishlist.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductWishlistUpdate]
     * @param  ProductWishlistPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postProductWishlistUpdate(ProductWishlistPostUpdateRequest $request)
    {
        $this->productwishlist->upadateData($request->all());
        return redirect()->route('product_wishlist.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductWishlistDelete]
     * @param  ProductWishlistPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postProductWishlistDelete(ProductWishlistPostDeleteRequest $request)
    {
        $this->productwishlist->deleteData($request->id);
        return redirect()->route('product_wishlist.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductWishlistCreateAjax]
     * @param  ProductWishlistPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductWishlistCreateAjax(ProductWishlistPostCreateAjaxRequest $request)
    {
        $response = $this->productwishlist->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postProductWishlistUpdateAjax]
     * @param  ProductWishlistPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductWishlistUpdateAjax(ProductWishlistPostUpdateAjaxRequest $request)
    {
        $response = $this->productwishlist->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postProductWishlistDeleteAjax]
     * @param  ProductWishlistPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductWishlistDeleteAjax(ProductWishlistPostDeleteAjaxRequest $request)
    {
        $response = $this->productwishlist->deleteData($request->id);
        return response()->json($response);
    }

}
