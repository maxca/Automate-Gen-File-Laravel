<?php
namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\CartGetDetailViewRequest;
use App\Http\Requests\Cart\CartGetEditViewRequest;
use App\Http\Requests\Cart\CartGetViewRequest;
use App\Http\Requests\Cart\CartPostCreateAjaxRequest;
use App\Http\Requests\Cart\CartPostCreateRequest;
use App\Http\Requests\Cart\CartPostDeleteAjaxRequest;
use App\Http\Requests\Cart\CartPostDeleteRequest;
use App\Http\Requests\Cart\CartPostUpdateAjaxRequest;
use App\Http\Requests\Cart\CartPostUpdateRequest;
use App\Repository\Cart\CartRepository;

class CartController extends Controller
{
    /**
     * cart repository
     * @var object class
     */
    protected $cart;

    public function __construct(CartRepository $cart)
    {
        $this->cart = $cart;
    }

    /**
     * [getCartListView]
     * @param  CartGetViewRequest $request [validation]
     * @return view object
     */
    public function getCartListView()
    {
        return $this->cart->getViewList();
    }

    /**
     * [getCartDetailView]
     * @param  CartGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getCartDetailView(CartGetDetailViewRequest $request)
    {
        return $this->cart->getViewDetail($request->id);
    }

    /**
     * [getCartEditView]
     * @param  CartGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getCartEditView(CartGetEditViewRequest $request)
    {
        return $this->cart->getViewEdit($request->id);
    }

    /**
     * [getCartCreateView]
     * @return view object
     */
    public function getCartCreateView()
    {
        return $this->cart->getViewCreate();
    }

    /**
     * [postCartCreate]
     * @param  CartPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postCartCreate(CartPostCreateRequest $request)
    {
        $this->cart->createData($request->all());
        return redirect()->route('cart.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postCartUpdate]
     * @param  CartPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postCartUpdate(CartPostUpdateRequest $request)
    {
        $this->cart->upadateData($request->all());
        return redirect()->route('cart.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postCartDelete]
     * @param  CartPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postCartDelete(CartPostDeleteRequest $request)
    {
        $this->cart->deleteData($request->id);
        return redirect()->route('cart.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postCartCreateAjax]
     * @param  CartPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postCartCreateAjax(CartPostCreateAjaxRequest $request)
    {
        $response = $this->cart->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postCartUpdateAjax]
     * @param  CartPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postCartUpdateAjax(CartPostUpdateAjaxRequest $request)
    {
        $response = $this->cart->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postCartDeleteAjax]
     * @param  CartPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postCartDeleteAjax(CartPostDeleteAjaxRequest $request)
    {
        $response = $this->cart->deleteData($request->id);
        return response()->json($response);
    }

}
