<?php

namespace App\Http\Controllers\Backend\Addresss;

use App\Http\Controllers\Controller;
use App\Http\Requests\Addresss\AddresssCreateRequest;
use App\Http\Requests\Addresss\AddresssDeleteRequest;
use App\Http\Requests\Addresss\AddresssGetUpdateRequest;
use App\Http\Requests\Addresss\AddresssGetDetailRequest;
use App\Http\Requests\Addresss\AddresssUpdateRequest;
use App\Repositories\Addresss\AddresssRepository;

class AddresssController extends Controller
{
    /**
     * Addresss repository
     * @var object
     */
    protected $addresss;

    public function __construct(AddresssRepository $addresss)
    {
        $this->addresss = $addresss;
    }
    /**
     * get Addresss show list
     * @return view
     */
    public function getAddresssList()
    {
        return $this->addresss->getList();
    }

    /**
     * get Addresss form create data
     * @return view
     */
    public function getFormAddresssCreate()
    {
        return $this->addresss->getCreateForm();
    }

    /**
     * get Addresss form update data
     * @param  GetUpdateAddresssRequest $request
     * @return view
     */
    public function getFormAddresssUpdate(AddresssGetUpdateRequest $request)
    {
        return $this->addresss->getUpdateForm($request->id);
    }

    /**
     * get Addresss form detail data
     * @return [type] [description]
     */
    public function getAddresssDetail(AddresssGetDetailRequest $request)
    {
        return $this->addresss->getFormDetail($request->id);
    }

    /**
     * submit create Addresss data to api
     * @param  CreateAddresssRequest $request
     * @return redirect back with flash success
     */
    public function submitFormAddresssCreate(AddresssCreateRequest $request)
    {
        $this->addresss->createDataApi($request->all());
        return redirect()->route('addresss.view')
            ->withFlashSuccess('create addresss data success');
    }

    /**
     * submit update Addresss data to api
     * @param  UpdateAddresssRequest $request
     * @return redirect back with flash success
     */
    public function submitFormAddresssUpdate(AddresssUpdateRequest $request)
    {
        $this->addresss->updateDataApi($request->id, $request->all());
        return redirect()->route('addresss.view')
            ->withFlashSuccess('update addresss data success');
    }

    /**
     * submit delete Addresss data to api
     * @param  DeleteAddresssRequest $request
     * @return redirect back with flash success
     */
    public function submitFormAddresssDelete(AddresssDeleteRequest $request)
    {
        $this->addresss->deleteDataApi($request->id);
        return redirect()->route('addresss.view')
            ->withFlashSuccess('delete addresss data success');
    }
}
