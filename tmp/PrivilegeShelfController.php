<?php

namespace App\Http\Controllers\Backend\PrivilegeShelf;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrivilegeShelf\PrivilegeShelfCreateRequest;
use App\Http\Requests\PrivilegeShelf\PrivilegeShelfDeleteRequest;
use App\Http\Requests\PrivilegeShelf\PrivilegeShelfGetUpdateRequest;
use App\Http\Requests\PrivilegeShelf\PrivilegeShelfGetDetailRequest;
use App\Http\Requests\PrivilegeShelf\PrivilegeShelfUpdateRequest;
use App\Repositories\PrivilegeShelf\PrivilegeShelfRepository;

class PrivilegeShelfController extends Controller
{
    /**
     * PrivilegeShelf repository
     * @var object
     */
    protected $privilegeshelf;

    public function __construct(PrivilegeShelfRepository $privilegeshelf)
    {
        $this->privilegeshelf = $privilegeshelf;
    }
    /**
     * get PrivilegeShelf show list
     * @return view
     */
    public function getPrivilegeShelfList()
    {
        return $this->privilegeshelf->getList();
    }

    /**
     * get PrivilegeShelf form create data
     * @return view
     */
    public function getFormPrivilegeShelfCreate()
    {
        return $this->privilegeshelf->getCreateForm();
    }

    /**
     * get PrivilegeShelf form update data
     * @param  GetUpdatePrivilegeShelfRequest $request
     * @return view
     */
    public function getFormPrivilegeShelfUpdate(PrivilegeShelfGetUpdateRequest $request)
    {
        return $this->privilegeshelf->getUpdateForm($request->id);
    }

    /**
     * get PrivilegeShelf form detail data
     * @return [type] [description]
     */
    public function getPrivilegeShelfDetail(PrivilegeShelfGetDetailRequest $request)
    {
        return $this->privilegeshelf->getFormDetail($request->id);
    }

    /**
     * submit create PrivilegeShelf data to api
     * @param  CreatePrivilegeShelfRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPrivilegeShelfCreate(PrivilegeShelfCreateRequest $request)
    {
        $this->privilegeshelf->createDataApi($request->all());
        return redirect()->route('privilegeshelf.view')
            ->withFlashSuccess('create privilegeshelf data success');
    }

    /**
     * submit update PrivilegeShelf data to api
     * @param  UpdatePrivilegeShelfRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPrivilegeShelfUpdate(PrivilegeShelfUpdateRequest $request)
    {
        $this->privilegeshelf->updateDataApi($request->id, $request->all());
        return redirect()->route('privilegeshelf.view')
            ->withFlashSuccess('update privilegeshelf data success');
    }

    /**
     * submit delete PrivilegeShelf data to api
     * @param  DeletePrivilegeShelfRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPrivilegeShelfDelete(PrivilegeShelfDeleteRequest $request)
    {
        $this->privilegeshelf->deleteDataApi($request->id);
        return redirect()->route('privilegeshelf.view')
            ->withFlashSuccess('delete privilegeshelf data success');
    }
}
