<?php

namespace App\Http\Controllers\Backend\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\ProductsCreateRequest;
use App\Http\Requests\Products\ProductsDeleteRequest;
use App\Http\Requests\Products\ProductsGetUpdateRequest;
use App\Http\Requests\Products\ProductsGetDetailRequest;
use App\Http\Requests\Products\ProductsUpdateRequest;
use App\Repositories\Products\ProductsRepository;

class ProductsController extends Controller
{
    /**
     * Products repository
     * @var object
     */
    protected $products;

    public function __construct(ProductsRepository $products)
    {
        $this->products = $products;
    }
    /**
     * get Products show list
     * @return view
     */
    public function getProductsList()
    {
        return $this->products->getList();
    }

    /**
     * get Products form create data
     * @return view
     */
    public function getFormProductsCreate()
    {
        return $this->products->getCreateForm();
    }

    /**
     * get Products form update data
     * @param  GetUpdateProductsRequest $request
     * @return view
     */
    public function getFormProductsUpdate(ProductsGetUpdateRequest $request)
    {
        return $this->products->getUpdateForm($request->id);
    }

    /**
     * get Products form detail data
     * @return [type] [description]
     */
    public function getProductsDetail(ProductsGetDetailRequest $request)
    {
        return $this->products->getFormDetail($request->id);
    }

    /**
     * submit create Products data to api
     * @param  CreateProductsRequest $request
     * @return redirect back with flash success
     */
    public function submitFormProductsCreate(ProductsCreateRequest $request)
    {
        $this->products->createDataApi($request->all());
        return redirect()->route('products.view')
            ->withFlashSuccess('create products data success');
    }

    /**
     * submit update Products data to api
     * @param  UpdateProductsRequest $request
     * @return redirect back with flash success
     */
    public function submitFormProductsUpdate(ProductsUpdateRequest $request)
    {
        $this->products->updateDataApi($request->id, $request->all());
        return redirect()->route('products.view')
            ->withFlashSuccess('update products data success');
    }

    /**
     * submit delete Products data to api
     * @param  DeleteProductsRequest $request
     * @return redirect back with flash success
     */
    public function submitFormProductsDelete(ProductsDeleteRequest $request)
    {
        $this->products->deleteDataApi($request->id);
        return redirect()->route('products.view')
            ->withFlashSuccess('delete products data success');
    }
}
