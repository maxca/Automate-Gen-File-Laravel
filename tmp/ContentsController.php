<?php

namespace App\Http\Controllers\Backend\Contents;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contents\ContentsCreateRequest;
use App\Http\Requests\Contents\ContentsDeleteRequest;
use App\Http\Requests\Contents\ContentsGetUpdateRequest;
use App\Http\Requests\Contents\ContentsGetDetailRequest;
use App\Http\Requests\Contents\ContentsUpdateRequest;
use App\Repositories\Contents\ContentsRepository;

class ContentsController extends Controller
{
    /**
     * Contents repository
     * @var object
     */
    protected $contents;

    public function __construct(ContentsRepository $contents)
    {
        $this->contents = $contents;
    }
    /**
     * get Contents show list
     * @return view
     */
    public function getContentsList()
    {
        return $this->contents->getList();
    }

    /**
     * get Contents form create data
     * @return view
     */
    public function getFormContentsCreate()
    {
        return $this->contents->getCreateForm();
    }

    /**
     * get Contents form update data
     * @param  GetUpdateContentsRequest $request
     * @return view
     */
    public function getFormContentsUpdate(ContentsGetUpdateRequest $request)
    {
        return $this->contents->getUpdateForm($request->id);
    }

    /**
     * get Contents form detail data
     * @return [type] [description]
     */
    public function getContentsDetail(ContentsGetDetailRequest $request)
    {
        return $this->contents->getFormDetail($request->id);
    }

    /**
     * submit create Contents data to api
     * @param  CreateContentsRequest $request
     * @return redirect back with flash success
     */
    public function submitFormContentsCreate(ContentsCreateRequest $request)
    {
        $this->contents->createDataApi($request->all());
        return redirect()->route('contents.view')
            ->withFlashSuccess('create contents data success');
    }

    /**
     * submit update Contents data to api
     * @param  UpdateContentsRequest $request
     * @return redirect back with flash success
     */
    public function submitFormContentsUpdate(ContentsUpdateRequest $request)
    {
        $this->contents->updateDataApi($request->id, $request->all());
        return redirect()->route('contents.view')
            ->withFlashSuccess('update contents data success');
    }

    /**
     * submit delete Contents data to api
     * @param  DeleteContentsRequest $request
     * @return redirect back with flash success
     */
    public function submitFormContentsDelete(ContentsDeleteRequest $request)
    {
        $this->contents->deleteDataApi($request->id);
        return redirect()->route('contents.view')
            ->withFlashSuccess('delete contents data success');
    }
}
