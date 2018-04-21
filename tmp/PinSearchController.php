<?php

namespace App\Http\Controllers\Backend\PinSearch;

use App\Http\Controllers\Controller;
use App\Http\Requests\PinSearch\PinSearchCreateRequest;
use App\Http\Requests\PinSearch\PinSearchDeleteRequest;
use App\Http\Requests\PinSearch\PinSearchGetUpdateRequest;
use App\Http\Requests\PinSearch\PinSearchGetDetailRequest;
use App\Http\Requests\PinSearch\PinSearchUpdateRequest;
use App\Repositories\PinSearch\PinSearchRepository;

class PinSearchController extends Controller
{
    /**
     * PinSearch repository
     * @var object
     */
    protected $pinsearch;

    public function __construct(PinSearchRepository $pinsearch)
    {
        $this->pinsearch = $pinsearch;
    }
    /**
     * get PinSearch show list
     * @return view
     */
    public function getPinSearchList()
    {
        return $this->pinsearch->getList();
    }

    /**
     * get PinSearch form create data
     * @return view
     */
    public function getFormPinSearchCreate()
    {
        return $this->pinsearch->getCreateForm();
    }

    /**
     * get PinSearch form update data
     * @param  GetUpdatePinSearchRequest $request
     * @return view
     */
    public function getFormPinSearchUpdate(PinSearchGetUpdateRequest $request)
    {
        return $this->pinsearch->getUpdateForm($request->id);
    }

    /**
     * get PinSearch form detail data
     * @return [type] [description]
     */
    public function getPinSearchDetail(PinSearchGetDetailRequest $request)
    {
        return $this->pinsearch->getFormDetail($request->id);
    }

    /**
     * submit create PinSearch data to api
     * @param  CreatePinSearchRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPinSearchCreate(PinSearchCreateRequest $request)
    {
        $this->pinsearch->createDataApi($request->all());
        return redirect()->route('pinsearch.view')
            ->withFlashSuccess('create pinsearch data success');
    }

    /**
     * submit update PinSearch data to api
     * @param  UpdatePinSearchRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPinSearchUpdate(PinSearchUpdateRequest $request)
    {
        $this->pinsearch->updateDataApi($request->id, $request->all());
        return redirect()->route('pinsearch.view')
            ->withFlashSuccess('update pinsearch data success');
    }

    /**
     * submit delete PinSearch data to api
     * @param  DeletePinSearchRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPinSearchDelete(PinSearchDeleteRequest $request)
    {
        $this->pinsearch->deleteDataApi($request->id);
        return redirect()->route('pinsearch.view')
            ->withFlashSuccess('delete pinsearch data success');
    }
}
