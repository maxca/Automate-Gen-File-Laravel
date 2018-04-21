<?php

namespace App\Http\Controllers\Backend\Partner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partner\PartnerCreateRequest;
use App\Http\Requests\Partner\PartnerDeleteRequest;
use App\Http\Requests\Partner\PartnerGetUpdateRequest;
use App\Http\Requests\Partner\PartnerGetDetailRequest;
use App\Http\Requests\Partner\PartnerUpdateRequest;
use App\Repositories\Partner\PartnerRepository;

class PartnerController extends Controller
{
    /**
     * Partner repository
     * @var object
     */
    protected $partner;

    public function __construct(PartnerRepository $partner)
    {
        $this->partner = $partner;
    }
    /**
     * get Partner show list
     * @return view
     */
    public function getPartnerList()
    {
        return $this->partner->getList();
    }

    /**
     * get Partner form create data
     * @return view
     */
    public function getFormPartnerCreate()
    {
        return $this->partner->getCreateForm();
    }

    /**
     * get Partner form update data
     * @param  GetUpdatePartnerRequest $request
     * @return view
     */
    public function getFormPartnerUpdate(PartnerGetUpdateRequest $request)
    {
        return $this->partner->getUpdateForm($request->id);
    }

    /**
     * get Partner form detail data
     * @return [type] [description]
     */
    public function getPartnerDetail(PartnerGetDetailRequest $request)
    {
        return $this->partner->getFormDetail($request->id);
    }

    /**
     * submit create Partner data to api
     * @param  CreatePartnerRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPartnerCreate(PartnerCreateRequest $request)
    {
        $this->partner->createDataApi($request->all());
        return redirect()->route('partner.view')
            ->withFlashSuccess('create partner data success');
    }

    /**
     * submit update Partner data to api
     * @param  UpdatePartnerRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPartnerUpdate(PartnerUpdateRequest $request)
    {
        $this->partner->updateDataApi($request->id, $request->all());
        return redirect()->route('partner.view')
            ->withFlashSuccess('update partner data success');
    }

    /**
     * submit delete Partner data to api
     * @param  DeletePartnerRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPartnerDelete(PartnerDeleteRequest $request)
    {
        $this->partner->deleteDataApi($request->id);
        return redirect()->route('partner.view')
            ->withFlashSuccess('delete partner data success');
    }
}
