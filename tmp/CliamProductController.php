<?php

namespace App\Http\Controllers\Backend\CliamProduct;

use App\Http\Controllers\Controller;
use App\Http\Requests\CliamProduct\CliamProductCreateRequest;
use App\Http\Requests\CliamProduct\CliamProductDeleteRequest;
use App\Http\Requests\CliamProduct\CliamProductGetUpdateRequest;
use App\Http\Requests\CliamProduct\CliamProductGetDetailRequest;
use App\Http\Requests\CliamProduct\CliamProductUpdateRequest;
use App\Repositories\CliamProduct\CliamProductRepository;

class CliamProductController extends Controller
{
    /**
     * CliamProduct repository
     * @var object
     */
    protected $cliamproduct;

    public function __construct(CliamProductRepository $cliamproduct)
    {
        $this->cliamproduct = $cliamproduct;
    }
    /**
     * get CliamProduct show list
     * @return view
     */
    public function getCliamProductList()
    {
        return $this->cliamproduct->getList();
    }

    /**
     * get CliamProduct form create data
     * @return view
     */
    public function getFormCliamProductCreate()
    {
        return $this->cliamproduct->getCreateForm();
    }

    /**
     * get CliamProduct form update data
     * @param  GetUpdateCliamProductRequest $request
     * @return view
     */
    public function getFormCliamProductUpdate(CliamProductGetUpdateRequest $request)
    {
        return $this->cliamproduct->getUpdateForm($request->id);
    }

    /**
     * get CliamProduct form detail data
     * @return [type] [description]
     */
    public function getCliamProductDetail(CliamProductGetDetailRequest $request)
    {
        return $this->cliamproduct->getFormDetail($request->id);
    }

    /**
     * submit create CliamProduct data to api
     * @param  CreateCliamProductRequest $request
     * @return redirect back with flash success
     */
    public function submitFormCliamProductCreate(CliamProductCreateRequest $request)
    {
        $response = $this->cliamproduct->createDataApi($request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('cliamproduct.view')
            ->withFlashSuccess('create cliamproduct data success');
    }

    /**
     * submit update CliamProduct data to api
     * @param  UpdateCliamProductRequest $request
     * @return redirect back with flash success
     */
    public function submitFormCliamProductUpdate(CliamProductUpdateRequest $request)
    {
        $response = $this->cliamproduct->updateDataApi($request->id, $request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('cliamproduct.view')
            ->withFlashSuccess('update cliamproduct data success');
    }

    /**
     * submit delete CliamProduct data to api
     * @param  DeleteCliamProductRequest $request
     * @return redirect back with flash success
     */
    public function submitFormCliamProductDelete(CliamProductDeleteRequest $request)
    {
        $this->cliamproduct->deleteDataApi($request->id);
        return redirect()->route('cliamproduct.view')
            ->withFlashSuccess('delete cliamproduct data success');
    }
}
