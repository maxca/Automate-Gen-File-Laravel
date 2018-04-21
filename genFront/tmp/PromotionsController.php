<?php
namespace App\Http\Controllers\Promotions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Promotions\PromotionsGetDetailViewRequest;
use App\Http\Requests\Promotions\PromotionsGetEditViewRequest;
use App\Http\Requests\Promotions\PromotionsGetViewRequest;
use App\Http\Requests\Promotions\PromotionsPostCreateAjaxRequest;
use App\Http\Requests\Promotions\PromotionsPostCreateRequest;
use App\Http\Requests\Promotions\PromotionsPostDeleteAjaxRequest;
use App\Http\Requests\Promotions\PromotionsPostDeleteRequest;
use App\Http\Requests\Promotions\PromotionsPostUpdateAjaxRequest;
use App\Http\Requests\Promotions\PromotionsPostUpdateRequest;
use App\Repository\Promotions\PromotionsRepository;

class PromotionsController extends Controller
{
    /**
     * promotions repository
     * @var object class
     */
    protected $promotions;

    public function __construct(PromotionsRepository $promotions)
    {
        $this->promotions = $promotions;
    }

    /**
     * [getPromotionsListView]
     * @param  PromotionsGetViewRequest $request [validation]
     * @return view object
     */
    public function getPromotionsListView()
    {
        return $this->promotions->getViewList();
    }

    /**
     * [getPromotionsDetailView]
     * @param  PromotionsGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getPromotionsDetailView(PromotionsGetDetailViewRequest $request)
    {
        return $this->promotions->getViewDetail($request->id);
    }

    /**
     * [getPromotionsEditView]
     * @param  PromotionsGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getPromotionsEditView(PromotionsGetEditViewRequest $request)
    {
        return $this->promotions->getViewEdit($request->id);
    }

    /**
     * [getPromotionsCreateView]
     * @return view object
     */
    public function getPromotionsCreateView()
    {
        return $this->promotions->getViewCreate();
    }

    /**
     * [postPromotionsCreate]
     * @param  PromotionsPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postPromotionsCreate(PromotionsPostCreateRequest $request)
    {
        $this->promotions->createData($request->all());
        return redirect()->route('promotions.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postPromotionsUpdate]
     * @param  PromotionsPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postPromotionsUpdate(PromotionsPostUpdateRequest $request)
    {
        $this->promotions->upadateData($request->all());
        return redirect()->route('promotions.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postPromotionsDelete]
     * @param  PromotionsPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postPromotionsDelete(PromotionsPostDeleteRequest $request)
    {
        $this->promotions->deleteData($request->id);
        return redirect()->route('promotions.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postPromotionsCreateAjax]
     * @param  PromotionsPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postPromotionsCreateAjax(PromotionsPostCreateAjaxRequest $request)
    {
        $response = $this->promotions->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postPromotionsUpdateAjax]
     * @param  PromotionsPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postPromotionsUpdateAjax(PromotionsPostUpdateAjaxRequest $request)
    {
        $response = $this->promotions->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postPromotionsDeleteAjax]
     * @param  PromotionsPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postPromotionsDeleteAjax(PromotionsPostDeleteAjaxRequest $request)
    {
        $response = $this->promotions->deleteData($request->id);
        return response()->json($response);
    }

}
