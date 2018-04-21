<?php
namespace App\Http\Controllers\Codes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Codes\CodesGetDetailViewRequest;
use App\Http\Requests\Codes\CodesGetEditViewRequest;
use App\Http\Requests\Codes\CodesGetViewRequest;
use App\Http\Requests\Codes\CodesPostCreateAjaxRequest;
use App\Http\Requests\Codes\CodesPostCreateRequest;
use App\Http\Requests\Codes\CodesPostDeleteAjaxRequest;
use App\Http\Requests\Codes\CodesPostDeleteRequest;
use App\Http\Requests\Codes\CodesPostUpdateAjaxRequest;
use App\Http\Requests\Codes\CodesPostUpdateRequest;
use App\Repository\Codes\CodesRepository;

class CodesController extends Controller
{
    /**
     * codes repository
     * @var object class
     */
    protected $codes;

    public function __construct(CodesRepository $codes)
    {
        $this->codes = $codes;
    }

    /**
     * [getCodesListView]
     * @param  CodesGetViewRequest $request [validation]
     * @return view object
     */
    public function getCodesListView()
    {
        return $this->codes->getViewList();
    }

    /**
     * [getCodesDetailView]
     * @param  CodesGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getCodesDetailView(CodesGetDetailViewRequest $request)
    {
        return $this->codes->getViewDetail($request->id);
    }

    /**
     * [getCodesEditView]
     * @param  CodesGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getCodesEditView(CodesGetEditViewRequest $request)
    {
        return $this->codes->getViewEdit($request->id);
    }

    /**
     * [getCodesCreateView]
     * @return view object
     */
    public function getCodesCreateView()
    {
        return $this->codes->getViewCreate();
    }

    /**
     * [postCodesCreate]
     * @param  CodesPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postCodesCreate(CodesPostCreateRequest $request)
    {
        $this->codes->createData($request->all());
        return redirect()->route('codes.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postCodesUpdate]
     * @param  CodesPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postCodesUpdate(CodesPostUpdateRequest $request)
    {
        $this->codes->upadateData($request->all());
        return redirect()->route('codes.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postCodesDelete]
     * @param  CodesPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postCodesDelete(CodesPostDeleteRequest $request)
    {
        $this->codes->deleteData($request->id);
        return redirect()->route('codes.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postCodesCreateAjax]
     * @param  CodesPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postCodesCreateAjax(CodesPostCreateAjaxRequest $request)
    {
        $response = $this->codes->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postCodesUpdateAjax]
     * @param  CodesPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postCodesUpdateAjax(CodesPostUpdateAjaxRequest $request)
    {
        $response = $this->codes->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postCodesDeleteAjax]
     * @param  CodesPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postCodesDeleteAjax(CodesPostDeleteAjaxRequest $request)
    {
        $response = $this->codes->deleteData($request->id);
        return response()->json($response);
    }

}
