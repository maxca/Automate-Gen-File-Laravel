<?php
namespace App\Http\Controllers\AuctionTransaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuctionTransaction\AuctionTransactionGetDetailViewRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionGetEditViewRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionGetViewRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionPostCreateAjaxRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionPostCreateRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionPostDeleteAjaxRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionPostDeleteRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionPostUpdateAjaxRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionPostUpdateRequest;
use App\Repository\AuctionTransaction\AuctionTransactionRepository;

class AuctionTransactionController extends Controller
{
    /**
     * auctiontransaction repository
     * @var object class
     */
    protected $auctiontransaction;

    public function __construct(AuctionTransactionRepository $auctiontransaction)
    {
        $this->auctiontransaction = $auctiontransaction;
    }

    /**
     * [getAuctionTransactionListView]
     * @param  AuctionTransactionGetViewRequest $request [validation]
     * @return view object
     */
    public function getAuctionTransactionListView()
    {
        return $this->auctiontransaction->getViewList();
    }

    /**
     * [getAuctionTransactionDetailView]
     * @param  AuctionTransactionGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getAuctionTransactionDetailView(AuctionTransactionGetDetailViewRequest $request)
    {
        return $this->auctiontransaction->getViewDetail($request->id);
    }

    /**
     * [getAuctionTransactionEditView]
     * @param  AuctionTransactionGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getAuctionTransactionEditView(AuctionTransactionGetEditViewRequest $request)
    {
        return $this->auctiontransaction->getViewEdit($request->id);
    }

    /**
     * [getAuctionTransactionCreateView]
     * @return view object
     */
    public function getAuctionTransactionCreateView()
    {
        return $this->auctiontransaction->getViewCreate();
    }

    /**
     * [postAuctionTransactionCreate]
     * @param  AuctionTransactionPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postAuctionTransactionCreate(AuctionTransactionPostCreateRequest $request)
    {
        $this->auctiontransaction->createData($request->all());
        return redirect()->route('auction_transaction.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postAuctionTransactionUpdate]
     * @param  AuctionTransactionPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postAuctionTransactionUpdate(AuctionTransactionPostUpdateRequest $request)
    {
        $this->auctiontransaction->upadateData($request->all());
        return redirect()->route('auction_transaction.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postAuctionTransactionDelete]
     * @param  AuctionTransactionPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postAuctionTransactionDelete(AuctionTransactionPostDeleteRequest $request)
    {
        $this->auctiontransaction->deleteData($request->id);
        return redirect()->route('auction_transaction.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postAuctionTransactionCreateAjax]
     * @param  AuctionTransactionPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postAuctionTransactionCreateAjax(AuctionTransactionPostCreateAjaxRequest $request)
    {
        $response = $this->auctiontransaction->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postAuctionTransactionUpdateAjax]
     * @param  AuctionTransactionPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postAuctionTransactionUpdateAjax(AuctionTransactionPostUpdateAjaxRequest $request)
    {
        $response = $this->auctiontransaction->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postAuctionTransactionDeleteAjax]
     * @param  AuctionTransactionPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postAuctionTransactionDeleteAjax(AuctionTransactionPostDeleteAjaxRequest $request)
    {
        $response = $this->auctiontransaction->deleteData($request->id);
        return response()->json($response);
    }

}
