<?php

namespace App\Http\Controllers\Backend\Privilege;

use App\Http\Controllers\Controller;
use App\Http\Requests\Privilege\PrivilegeCreateRequest;
use App\Http\Requests\Privilege\PrivilegeDeleteRequest;
use App\Http\Requests\Privilege\PrivilegeGetUpdateRequest;
use App\Http\Requests\Privilege\PrivilegeGetDetailRequest;
use App\Http\Requests\Privilege\PrivilegeUpdateRequest;
use App\Repositories\Privilege\PrivilegeRepository;

class PrivilegeController extends Controller
{
    /**
     * Privilege repository
     * @var object
     */
    protected $privilege;

    public function __construct(PrivilegeRepository $privilege)
    {
        $this->privilege = $privilege;
    }
    /**
     * get Privilege show list
     * @return view
     */
    public function getPrivilegeList()
    {
        return $this->privilege->getList();
    }

    /**
     * get Privilege form create data
     * @return view
     */
    public function getFormPrivilegeCreate()
    {
        return $this->privilege->getCreateForm();
    }

    /**
     * get Privilege form update data
     * @param  GetUpdatePrivilegeRequest $request
     * @return view
     */
    public function getFormPrivilegeUpdate(PrivilegeGetUpdateRequest $request)
    {
        return $this->privilege->getUpdateForm($request->id);
    }

    /**
     * get Privilege form detail data
     * @return [type] [description]
     */
    public function getPrivilegeDetail(PrivilegeGetDetailRequest $request)
    {
        return $this->privilege->getFormDetail($request->id);
    }

    /**
     * submit create Privilege data to api
     * @param  CreatePrivilegeRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPrivilegeCreate(PrivilegeCreateRequest $request)
    {
        $this->privilege->createDataApi($request->all());
        return redirect()->route('privilege.view')
            ->withFlashSuccess('create privilege data success');
    }

    /**
     * submit update Privilege data to api
     * @param  UpdatePrivilegeRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPrivilegeUpdate(PrivilegeUpdateRequest $request)
    {
        $this->privilege->updateDataApi($request->id, $request->all());
        return redirect()->route('privilege.view')
            ->withFlashSuccess('update privilege data success');
    }

    /**
     * submit delete Privilege data to api
     * @param  DeletePrivilegeRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPrivilegeDelete(PrivilegeDeleteRequest $request)
    {
        $this->privilege->deleteDataApi($request->id);
        return redirect()->route('privilege.view')
            ->withFlashSuccess('delete privilege data success');
    }
}
