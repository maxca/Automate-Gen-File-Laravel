<?php
namespace App\Http\Controllers\ServiceDesk;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceDesk\ServiceDeskGetDetailViewRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskGetEditViewRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskGetViewRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskPostCreateAjaxRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskPostCreateRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskPostDeleteAjaxRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskPostDeleteRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskPostUpdateAjaxRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskPostUpdateRequest;
use App\Repository\ServiceDesk\ServiceDeskRepository;

class ServiceDeskController extends Controller
{
    /**
     * servicedesk repository
     * @var object class
     */
    protected $servicedesk;

    public function __construct(ServiceDeskRepository $servicedesk)
    {
        $this->servicedesk = $servicedesk;
    }

    /**
     * [getServiceDeskListView]
     * @param  ServiceDeskGetViewRequest $request [validation]
     * @return view object
     */
    public function getServiceDeskListView()
    {
        return $this->servicedesk->getViewList();
    }

    /**
     * [getServiceDeskDetailView]
     * @param  ServiceDeskGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getServiceDeskDetailView(ServiceDeskGetDetailViewRequest $request)
    {
        return $this->servicedesk->getViewDetail($request->id);
    }

    /**
     * [getServiceDeskEditView]
     * @param  ServiceDeskGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getServiceDeskEditView(ServiceDeskGetEditViewRequest $request)
    {
        return $this->servicedesk->getViewEdit($request->id);
    }

    /**
     * [getServiceDeskCreateView]
     * @return view object
     */
    public function getServiceDeskCreateView()
    {
        return $this->servicedesk->getViewCreate();
    }

    /**
     * [postServiceDeskCreate]
     * @param  ServiceDeskPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postServiceDeskCreate(ServiceDeskPostCreateRequest $request)
    {
        $this->servicedesk->createData($request->all());
        return redirect()->route('service_desk.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postServiceDeskUpdate]
     * @param  ServiceDeskPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postServiceDeskUpdate(ServiceDeskPostUpdateRequest $request)
    {
        $this->servicedesk->upadateData($request->all());
        return redirect()->route('service_desk.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postServiceDeskDelete]
     * @param  ServiceDeskPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postServiceDeskDelete(ServiceDeskPostDeleteRequest $request)
    {
        $this->servicedesk->deleteData($request->id);
        return redirect()->route('service_desk.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postServiceDeskCreateAjax]
     * @param  ServiceDeskPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postServiceDeskCreateAjax(ServiceDeskPostCreateAjaxRequest $request)
    {
        $response = $this->servicedesk->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postServiceDeskUpdateAjax]
     * @param  ServiceDeskPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postServiceDeskUpdateAjax(ServiceDeskPostUpdateAjaxRequest $request)
    {
        $response = $this->servicedesk->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postServiceDeskDeleteAjax]
     * @param  ServiceDeskPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postServiceDeskDeleteAjax(ServiceDeskPostDeleteAjaxRequest $request)
    {
        $response = $this->servicedesk->deleteData($request->id);
        return response()->json($response);
    }

}
