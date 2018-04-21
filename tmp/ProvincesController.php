<?php

namespace App\Http\Controllers\Backend\Provinces;

use App\Http\Controllers\Controller;
use App\Http\Requests\Provinces\ProvincesCreateRequest;
use App\Http\Requests\Provinces\ProvincesDeleteRequest;
use App\Http\Requests\Provinces\ProvincesGetUpdateRequest;
use App\Http\Requests\Provinces\ProvincesGetDetailRequest;
use App\Http\Requests\Provinces\ProvincesUpdateRequest;
use App\Repositories\Provinces\ProvincesRepository;

class ProvincesController extends Controller
{
    /**
     * Provinces repository
     * @var object
     */
    protected $provinces;

    public function __construct(ProvincesRepository $provinces)
    {
        $this->provinces = $provinces;
    }
    /**
     * get Provinces show list
     * @return view
     */
    public function getProvincesList()
    {
        return $this->provinces->getList();
    }

    /**
     * get Provinces form create data
     * @return view
     */
    public function getFormProvincesCreate()
    {
        return $this->provinces->getCreateForm();
    }

    /**
     * get Provinces form update data
     * @param  GetUpdateProvincesRequest $request
     * @return view
     */
    public function getFormProvincesUpdate(ProvincesGetUpdateRequest $request)
    {
        return $this->provinces->getUpdateForm($request->id);
    }

    /**
     * get Provinces form detail data
     * @return [type] [description]
     */
    public function getProvincesDetail(ProvincesGetDetailRequest $request)
    {
        return $this->provinces->getFormDetail($request->id);
    }

    /**
     * submit create Provinces data to api
     * @param  CreateProvincesRequest $request
     * @return redirect back with flash success
     */
    public function submitFormProvincesCreate(ProvincesCreateRequest $request)
    {
        $this->provinces->createDataApi($request->all());
        return redirect()->route('provinces.view')
            ->withFlashSuccess('create provinces data success');
    }

    /**
     * submit update Provinces data to api
     * @param  UpdateProvincesRequest $request
     * @return redirect back with flash success
     */
    public function submitFormProvincesUpdate(ProvincesUpdateRequest $request)
    {
        $this->provinces->updateDataApi($request->id, $request->all());
        return redirect()->route('provinces.view')
            ->withFlashSuccess('update provinces data success');
    }

    /**
     * submit delete Provinces data to api
     * @param  DeleteProvincesRequest $request
     * @return redirect back with flash success
     */
    public function submitFormProvincesDelete(ProvincesDeleteRequest $request)
    {
        $this->provinces->deleteDataApi($request->id);
        return redirect()->route('provinces.view')
            ->withFlashSuccess('delete provinces data success');
    }
}
