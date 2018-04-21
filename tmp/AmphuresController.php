<?php

namespace App\Http\Controllers\Backend\Amphures;

use App\Http\Controllers\Controller;
use App\Http\Requests\Amphures\AmphuresCreateRequest;
use App\Http\Requests\Amphures\AmphuresDeleteRequest;
use App\Http\Requests\Amphures\AmphuresGetUpdateRequest;
use App\Http\Requests\Amphures\AmphuresGetDetailRequest;
use App\Http\Requests\Amphures\AmphuresUpdateRequest;
use App\Repositories\Amphures\AmphuresRepository;

class AmphuresController extends Controller
{
    /**
     * Amphures repository
     * @var object
     */
    protected $amphures;

    public function __construct(AmphuresRepository $amphures)
    {
        $this->amphures = $amphures;
    }
    /**
     * get Amphures show list
     * @return view
     */
    public function getAmphuresList()
    {
        return $this->amphures->getList();
    }

    /**
     * get Amphures form create data
     * @return view
     */
    public function getFormAmphuresCreate()
    {
        return $this->amphures->getCreateForm();
    }

    /**
     * get Amphures form update data
     * @param  GetUpdateAmphuresRequest $request
     * @return view
     */
    public function getFormAmphuresUpdate(AmphuresGetUpdateRequest $request)
    {
        return $this->amphures->getUpdateForm($request->id);
    }

    /**
     * get Amphures form detail data
     * @return [type] [description]
     */
    public function getAmphuresDetail(AmphuresGetDetailRequest $request)
    {
        return $this->amphures->getFormDetail($request->id);
    }

    /**
     * submit create Amphures data to api
     * @param  CreateAmphuresRequest $request
     * @return redirect back with flash success
     */
    public function submitFormAmphuresCreate(AmphuresCreateRequest $request)
    {
        $this->amphures->createDataApi($request->all());
        return redirect()->route('amphures.view')
            ->withFlashSuccess('create amphures data success');
    }

    /**
     * submit update Amphures data to api
     * @param  UpdateAmphuresRequest $request
     * @return redirect back with flash success
     */
    public function submitFormAmphuresUpdate(AmphuresUpdateRequest $request)
    {
        $this->amphures->updateDataApi($request->id, $request->all());
        return redirect()->route('amphures.view')
            ->withFlashSuccess('update amphures data success');
    }

    /**
     * submit delete Amphures data to api
     * @param  DeleteAmphuresRequest $request
     * @return redirect back with flash success
     */
    public function submitFormAmphuresDelete(AmphuresDeleteRequest $request)
    {
        $this->amphures->deleteDataApi($request->id);
        return redirect()->route('amphures.view')
            ->withFlashSuccess('delete amphures data success');
    }
}
