<?php

namespace App\Http\Controllers\Backend\ProductGroup;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductGroup\ProductGroupCreateRequest;
use App\Http\Requests\ProductGroup\ProductGroupDeleteRequest;
use App\Http\Requests\ProductGroup\ProductGroupGetUpdateRequest;
use App\Http\Requests\ProductGroup\ProductGroupGetDetailRequest;
use App\Http\Requests\ProductGroup\ProductGroupUpdateRequest;
use App\Repositories\ProductGroup\ProductGroupRepository;

class ProductGroupController extends Controller
{
    /**
     * ProductGroup repository
     * @var object
     */
    protected $productgroup;

    public function __construct(ProductGroupRepository $productgroup)
    {
        $this->productgroup = $productgroup;
    }
    /**
     * get ProductGroup show list
     * @return view
     */
    public function getProductGroupList()
    {
        return $this->productgroup->getList();
    }

    /**
     * get ProductGroup form create data
     * @return view
     */
    public function getFormProductGroupCreate()
    {
        return $this->productgroup->getCreateForm();
    }

    /**
     * get ProductGroup form update data
     * @param  GetUpdateProductGroupRequest $request
     * @return view
     */
    public function getFormProductGroupUpdate(ProductGroupGetUpdateRequest $request)
    {
        return $this->productgroup->getUpdateForm($request->id);
    }

    /**
     * get ProductGroup form detail data
     * @return [type] [description]
     */
    public function getProductGroupDetail(ProductGroupGetDetailRequest $request)
    {
        return $this->productgroup->getFormDetail($request->id);
    }

    /**
     * submit create ProductGroup data to api
     * @param  CreateProductGroupRequest $request
     * @return redirect back with flash success
     */
    public function submitFormProductGroupCreate(ProductGroupCreateRequest $request)
    {
        $this->productgroup->createDataApi($request->all());
        return redirect()->route('productgroup.view')
            ->withFlashSuccess('create productgroup data success');
    }

    /**
     * submit update ProductGroup data to api
     * @param  UpdateProductGroupRequest $request
     * @return redirect back with flash success
     */
    public function submitFormProductGroupUpdate(ProductGroupUpdateRequest $request)
    {
        $this->productgroup->updateDataApi($request->id, $request->all());
        return redirect()->route('productgroup.view')
            ->withFlashSuccess('update productgroup data success');
    }

    /**
     * submit delete ProductGroup data to api
     * @param  DeleteProductGroupRequest $request
     * @return redirect back with flash success
     */
    public function submitFormProductGroupDelete(ProductGroupDeleteRequest $request)
    {
        $this->productgroup->deleteDataApi($request->id);
        return redirect()->route('productgroup.view')
            ->withFlashSuccess('delete productgroup data success');
    }
}
