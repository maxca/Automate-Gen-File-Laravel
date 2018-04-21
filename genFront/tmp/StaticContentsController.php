<?php
namespace App\Http\Controllers\StaticContents;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaticContents\StaticContentsGetDetailViewRequest;
use App\Http\Requests\StaticContents\StaticContentsGetEditViewRequest;
use App\Http\Requests\StaticContents\StaticContentsGetViewRequest;
use App\Http\Requests\StaticContents\StaticContentsPostCreateAjaxRequest;
use App\Http\Requests\StaticContents\StaticContentsPostCreateRequest;
use App\Http\Requests\StaticContents\StaticContentsPostDeleteAjaxRequest;
use App\Http\Requests\StaticContents\StaticContentsPostDeleteRequest;
use App\Http\Requests\StaticContents\StaticContentsPostUpdateAjaxRequest;
use App\Http\Requests\StaticContents\StaticContentsPostUpdateRequest;
use App\Repository\StaticContents\StaticContentsRepository;

class StaticContentsController extends Controller
{
    /**
     * staticcontents repository
     * @var object class
     */
    protected $staticcontents;

    public function __construct(StaticContentsRepository $staticcontents)
    {
        $this->staticcontents = $staticcontents;
    }

    /**
     * [getStaticContentsListView]
     * @param  StaticContentsGetViewRequest $request [validation]
     * @return view object
     */
    public function getStaticContentsListView()
    {
        return $this->staticcontents->getViewList();
    }

    /**
     * [getStaticContentsDetailView]
     * @param  StaticContentsGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getStaticContentsDetailView(StaticContentsGetDetailViewRequest $request)
    {
        return $this->staticcontents->getViewDetail($request->id);
    }

    /**
     * [getStaticContentsEditView]
     * @param  StaticContentsGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getStaticContentsEditView(StaticContentsGetEditViewRequest $request)
    {
        return $this->staticcontents->getViewEdit($request->id);
    }

    /**
     * [getStaticContentsCreateView]
     * @return view object
     */
    public function getStaticContentsCreateView()
    {
        return $this->staticcontents->getViewCreate();
    }

    /**
     * [postStaticContentsCreate]
     * @param  StaticContentsPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postStaticContentsCreate(StaticContentsPostCreateRequest $request)
    {
        $this->staticcontents->createData($request->all());
        return redirect()->route('static_contents.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postStaticContentsUpdate]
     * @param  StaticContentsPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postStaticContentsUpdate(StaticContentsPostUpdateRequest $request)
    {
        $this->staticcontents->upadateData($request->all());
        return redirect()->route('static_contents.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postStaticContentsDelete]
     * @param  StaticContentsPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postStaticContentsDelete(StaticContentsPostDeleteRequest $request)
    {
        $this->staticcontents->deleteData($request->id);
        return redirect()->route('static_contents.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postStaticContentsCreateAjax]
     * @param  StaticContentsPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postStaticContentsCreateAjax(StaticContentsPostCreateAjaxRequest $request)
    {
        $response = $this->staticcontents->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postStaticContentsUpdateAjax]
     * @param  StaticContentsPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postStaticContentsUpdateAjax(StaticContentsPostUpdateAjaxRequest $request)
    {
        $response = $this->staticcontents->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postStaticContentsDeleteAjax]
     * @param  StaticContentsPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postStaticContentsDeleteAjax(StaticContentsPostDeleteAjaxRequest $request)
    {
        $response = $this->staticcontents->deleteData($request->id);
        return response()->json($response);
    }

}
