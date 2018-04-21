<?php

namespace App\Http\Controllers\Backend\PmMessage;

use App\Http\Controllers\Controller;
use App\Http\Requests\PmMessage\PmMessageCreateRequest;
use App\Http\Requests\PmMessage\PmMessageDeleteRequest;
use App\Http\Requests\PmMessage\PmMessageGetUpdateRequest;
use App\Http\Requests\PmMessage\PmMessageGetDetailRequest;
use App\Http\Requests\PmMessage\PmMessageUpdateRequest;
use App\Repositories\PmMessage\PmMessageRepository;

class PmMessageController extends Controller
{
    /**
     * PmMessage repository
     * @var object
     */
    protected $pmmessage;

    public function __construct(PmMessageRepository $pmmessage)
    {
        $this->pmmessage = $pmmessage;
    }
    /**
     * get PmMessage show list
     * @return view
     */
    public function getPmMessageList()
    {
        return $this->pmmessage->getList();
    }

    /**
     * get PmMessage form create data
     * @return view
     */
    public function getFormPmMessageCreate()
    {
        return $this->pmmessage->getCreateForm();
    }

    /**
     * get PmMessage form update data
     * @param  GetUpdatePmMessageRequest $request
     * @return view
     */
    public function getFormPmMessageUpdate(PmMessageGetUpdateRequest $request)
    {
        return $this->pmmessage->getUpdateForm($request->id);
    }

    /**
     * get PmMessage form detail data
     * @return [type] [description]
     */
    public function getPmMessageDetail(PmMessageGetDetailRequest $request)
    {
        return $this->pmmessage->getFormDetail($request->id);
    }

    /**
     * submit create PmMessage data to api
     * @param  CreatePmMessageRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPmMessageCreate(PmMessageCreateRequest $request)
    {
        $response = $this->pmmessage->createDataApi($request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('pmmessage.view')
            ->withFlashSuccess('create pmmessage data success');
    }

    /**
     * submit update PmMessage data to api
     * @param  UpdatePmMessageRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPmMessageUpdate(PmMessageUpdateRequest $request)
    {
        $response = $this->pmmessage->updateDataApi($request->id, $request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('pmmessage.view')
            ->withFlashSuccess('update pmmessage data success');
    }

    /**
     * submit delete PmMessage data to api
     * @param  DeletePmMessageRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPmMessageDelete(PmMessageDeleteRequest $request)
    {
        $this->pmmessage->deleteDataApi($request->id);
        return redirect()->route('pmmessage.view')
            ->withFlashSuccess('delete pmmessage data success');
    }
}
