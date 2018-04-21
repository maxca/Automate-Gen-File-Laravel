<?php
namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductGetDetailViewRequest;
use App\Http\Requests\Product\ProductGetEditViewRequest;
use App\Http\Requests\Product\ProductGetViewRequest;
use App\Http\Requests\Product\ProductPostCreateAjaxRequest;
use App\Http\Requests\Product\ProductPostCreateRequest;
use App\Http\Requests\Product\ProductPostDeleteAjaxRequest;
use App\Http\Requests\Product\ProductPostDeleteRequest;
use App\Http\Requests\Product\ProductPostUpdateAjaxRequest;
use App\Http\Requests\Product\ProductPostUpdateRequest;
use App\Repository\Product\ProductRepository;

class ProductController extends Controller
{
    /**
     * product repository
     * @var object class
     */
    protected $product;

    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    /**
     * [getProductListView]
     * @param  ProductGetViewRequest $request [validation]
     * @return view object
     */
    public function getProductListView()
    {
        return $this->product->getViewList();
    }

    /**
     * [getProductDetailView]
     * @param  ProductGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getProductDetailView(ProductGetDetailViewRequest $request)
    {
        return $this->product->getViewDetail($request->id);
    }

    /**
     * [getProductEditView]
     * @param  ProductGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getProductEditView(ProductGetEditViewRequest $request)
    {
        return $this->product->getViewEdit($request->id);
    }

    /**
     * [getProductCreateView]
     * @return view object
     */
    public function getProductCreateView()
    {
        return $this->product->getViewCreate();
    }

    /**
     * [postProductCreate]
     * @param  ProductPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postProductCreate(ProductPostCreateRequest $request)
    {
        $this->product->createData($request->all());
        return redirect()->route('product.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductUpdate]
     * @param  ProductPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postProductUpdate(ProductPostUpdateRequest $request)
    {
        $this->product->upadateData($request->all());
        return redirect()->route('product.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductDelete]
     * @param  ProductPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postProductDelete(ProductPostDeleteRequest $request)
    {
        $this->product->deleteData($request->id);
        return redirect()->route('product.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductCreateAjax]
     * @param  ProductPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductCreateAjax(ProductPostCreateAjaxRequest $request)
    {
        $response = $this->product->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postProductUpdateAjax]
     * @param  ProductPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductUpdateAjax(ProductPostUpdateAjaxRequest $request)
    {
        $response = $this->product->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postProductDeleteAjax]
     * @param  ProductPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductDeleteAjax(ProductPostDeleteAjaxRequest $request)
    {
        $response = $this->product->deleteData($request->id);
        return response()->json($response);
    }

}
