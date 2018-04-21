<?php

namespace App\Http\Controllers\Backend\Invoice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Invoice\InvoiceCreateRequest;
use App\Http\Requests\Invoice\InvoiceDeleteRequest;
use App\Http\Requests\Invoice\InvoiceGetUpdateRequest;
use App\Http\Requests\Invoice\InvoiceGetDetailRequest;
use App\Http\Requests\Invoice\InvoiceUpdateRequest;
use App\Repositories\Invoice\InvoiceRepository;

class InvoiceController extends Controller
{
    /**
     * Invoice repository
     * @var object
     */
    protected $invoice;

    public function __construct(InvoiceRepository $invoice)
    {
        $this->invoice = $invoice;
    }
    /**
     * get Invoice show list
     * @return view
     */
    public function getInvoiceList()
    {
        return $this->invoice->getList();
    }

    /**
     * get Invoice form create data
     * @return view
     */
    public function getFormInvoiceCreate()
    {
        return $this->invoice->getCreateForm();
    }

    /**
     * get Invoice form update data
     * @param  GetUpdateInvoiceRequest $request
     * @return view
     */
    public function getFormInvoiceUpdate(InvoiceGetUpdateRequest $request)
    {
        return $this->invoice->getUpdateForm($request->id);
    }

    /**
     * get Invoice form detail data
     * @return [type] [description]
     */
    public function getInvoiceDetail(InvoiceGetDetailRequest $request)
    {
        return $this->invoice->getFormDetail($request->id);
    }

    /**
     * submit create Invoice data to api
     * @param  CreateInvoiceRequest $request
     * @return redirect back with flash success
     */
    public function submitFormInvoiceCreate(InvoiceCreateRequest $request)
    {
        $response = $this->invoice->createDataApi($request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('invoice.view')
            ->withFlashSuccess('create invoice data success');
    }

    /**
     * submit update Invoice data to api
     * @param  UpdateInvoiceRequest $request
     * @return redirect back with flash success
     */
    public function submitFormInvoiceUpdate(InvoiceUpdateRequest $request)
    {
        $response = $this->invoice->updateDataApi($request->id, $request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('invoice.view')
            ->withFlashSuccess('update invoice data success');
    }

    /**
     * submit delete Invoice data to api
     * @param  DeleteInvoiceRequest $request
     * @return redirect back with flash success
     */
    public function submitFormInvoiceDelete(InvoiceDeleteRequest $request)
    {
        $this->invoice->deleteDataApi($request->id);
        return redirect()->route('invoice.view')
            ->withFlashSuccess('delete invoice data success');
    }
}
