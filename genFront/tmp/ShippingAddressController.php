<?php
namespace App\Http\Controllers\ShippingAddress;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingAddress\ShippingAddressGetDetailViewRequest;
use App\Http\Requests\ShippingAddress\ShippingAddressGetEditViewRequest;
use App\Http\Requests\ShippingAddress\ShippingAddressGetViewRequest;
use App\Http\Requests\ShippingAddress\ShippingAddressPostCreateAjaxRequest;
use App\Http\Requests\ShippingAddress\ShippingAddressPostCreateRequest;
use App\Http\Requests\ShippingAddress\ShippingAddressPostDeleteAjaxRequest;
use App\Http\Requests\ShippingAddress\ShippingAddressPostDeleteRequest;
use App\Http\Requests\ShippingAddress\ShippingAddressPostUpdateAjaxRequest;
use App\Http\Requests\ShippingAddress\ShippingAddressPostUpdateRequest;
use App\Repository\ShippingAddress\ShippingAddressRepository;

class ShippingAddressController extends Controller
{
    /**
     * shippingaddress repository
     * @var object class
     */
    protected $shippingaddress;

    public function __construct(ShippingAddressRepository $shippingaddress)
    {
        $this->shippingaddress = $shippingaddress;
    }

    /**
     * [getShippingAddressListView]
     * @param  ShippingAddressGetViewRequest $request [validation]
     * @return view object
     */
    public function getShippingAddressListView()
    {
        return $this->shippingaddress->getViewList();
    }

    /**
     * [getShippingAddressDetailView]
     * @param  ShippingAddressGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getShippingAddressDetailView(ShippingAddressGetDetailViewRequest $request)
    {
        return $this->shippingaddress->getViewDetail($request->id);
    }

    /**
     * [getShippingAddressEditView]
     * @param  ShippingAddressGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getShippingAddressEditView(ShippingAddressGetEditViewRequest $request)
    {
        return $this->shippingaddress->getViewEdit($request->id);
    }

    /**
     * [getShippingAddressCreateView]
     * @return view object
     */
    public function getShippingAddressCreateView()
    {
        return $this->shippingaddress->getViewCreate();
    }

    /**
     * [postShippingAddressCreate]
     * @param  ShippingAddressPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postShippingAddressCreate(ShippingAddressPostCreateRequest $request)
    {
        $this->shippingaddress->createData($request->all());
        return redirect()->route('shipping_address.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postShippingAddressUpdate]
     * @param  ShippingAddressPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postShippingAddressUpdate(ShippingAddressPostUpdateRequest $request)
    {
        $this->shippingaddress->upadateData($request->all());
        return redirect()->route('shipping_address.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postShippingAddressDelete]
     * @param  ShippingAddressPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postShippingAddressDelete(ShippingAddressPostDeleteRequest $request)
    {
        $this->shippingaddress->deleteData($request->id);
        return redirect()->route('shipping_address.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postShippingAddressCreateAjax]
     * @param  ShippingAddressPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postShippingAddressCreateAjax(ShippingAddressPostCreateAjaxRequest $request)
    {
        $response = $this->shippingaddress->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postShippingAddressUpdateAjax]
     * @param  ShippingAddressPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postShippingAddressUpdateAjax(ShippingAddressPostUpdateAjaxRequest $request)
    {
        $response = $this->shippingaddress->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postShippingAddressDeleteAjax]
     * @param  ShippingAddressPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postShippingAddressDeleteAjax(ShippingAddressPostDeleteAjaxRequest $request)
    {
        $response = $this->shippingaddress->deleteData($request->id);
        return response()->json($response);
    }

}
