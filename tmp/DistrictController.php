<?php

namespace App\Http\Controllers\Backend\District;

use App\Http\Controllers\Controller;
use App\Http\Requests\District\DistrictCreateRequest;
use App\Http\Requests\District\DistrictDeleteRequest;
use App\Http\Requests\District\DistrictGetUpdateRequest;
use App\Http\Requests\District\DistrictGetDetailRequest;
use App\Http\Requests\District\DistrictUpdateRequest;
use App\Repositories\District\DistrictRepository;

class DistrictController extends Controller
{
    /**
     * District repository
     * @var object
     */
    protected $district;

    public function __construct(DistrictRepository $district)
    {
        $this->district = $district;
    }
    /**
     * get District show list
     * @return view
     */
    public function getDistrictList()
    {
        return $this->district->getList();
    }

    /**
     * get District form create data
     * @return view
     */
    public function getFormDistrictCreate()
    {
        return $this->district->getCreateForm();
    }

    /**
     * get District form update data
     * @param  GetUpdateDistrictRequest $request
     * @return view
     */
    public function getFormDistrictUpdate(DistrictGetUpdateRequest $request)
    {
        return $this->district->getUpdateForm($request->id);
    }

    /**
     * get District form detail data
     * @return [type] [description]
     */
    public function getDistrictDetail(DistrictGetDetailRequest $request)
    {
        return $this->district->getFormDetail($request->id);
    }

    /**
     * submit create District data to api
     * @param  CreateDistrictRequest $request
     * @return redirect back with flash success
     */
    public function submitFormDistrictCreate(DistrictCreateRequest $request)
    {
        $this->district->createDataApi($request->all());
        return redirect()->route('district.view')
            ->withFlashSuccess('create district data success');
    }

    /**
     * submit update District data to api
     * @param  UpdateDistrictRequest $request
     * @return redirect back with flash success
     */
    public function submitFormDistrictUpdate(DistrictUpdateRequest $request)
    {
        $this->district->updateDataApi($request->id, $request->all());
        return redirect()->route('district.view')
            ->withFlashSuccess('update district data success');
    }

    /**
     * submit delete District data to api
     * @param  DeleteDistrictRequest $request
     * @return redirect back with flash success
     */
    public function submitFormDistrictDelete(DistrictDeleteRequest $request)
    {
        $this->district->deleteDataApi($request->id);
        return redirect()->route('district.view')
            ->withFlashSuccess('delete district data success');
    }
}
