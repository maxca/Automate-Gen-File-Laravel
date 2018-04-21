<?php
namespace App\Http\Controllers\Auction;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auction\AuctionGetDetailViewRequest;
use App\Http\Requests\Auction\AuctionGetEditViewRequest;
use App\Http\Requests\Auction\AuctionGetViewRequest;
use App\Http\Requests\Auction\AuctionPostCreateAjaxRequest;
use App\Http\Requests\Auction\AuctionPostCreateRequest;
use App\Http\Requests\Auction\AuctionPostDeleteAjaxRequest;
use App\Http\Requests\Auction\AuctionPostDeleteRequest;
use App\Http\Requests\Auction\AuctionPostUpdateAjaxRequest;
use App\Http\Requests\Auction\AuctionPostUpdateRequest;
use App\Repository\Auction\AuctionRepository;

class AuctionController extends Controller
{
    /**
     * auction repository
     * @var object class
     */
    protected $auction;

    public function __construct(AuctionRepository $auction)
    {
        $this->auction = $auction;
    }

    /**
     * [getAuctionListView]
     * @param  AuctionGetViewRequest $request [validation]
     * @return view object
     */
    public function getAuctionListView()
    {
        return $this->auction->getViewList();
    }

    /**
     * [getAuctionDetailView]
     * @param  AuctionGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getAuctionDetailView(AuctionGetDetailViewRequest $request)
    {
        return $this->auction->getViewDetail($request->id);
    }

    /**
     * [getAuctionEditView]
     * @param  AuctionGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getAuctionEditView(AuctionGetEditViewRequest $request)
    {
        return $this->auction->getViewEdit($request->id);
    }

    /**
     * [getAuctionCreateView]
     * @return view object
     */
    public function getAuctionCreateView()
    {
        return $this->auction->getViewCreate();
    }

    /**
     * [postAuctionCreate]
     * @param  AuctionPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postAuctionCreate(AuctionPostCreateRequest $request)
    {
        $this->auction->createData($request->all());
        return redirect()->route('auction.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postAuctionUpdate]
     * @param  AuctionPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postAuctionUpdate(AuctionPostUpdateRequest $request)
    {
        $this->auction->upadateData($request->all());
        return redirect()->route('auction.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postAuctionDelete]
     * @param  AuctionPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postAuctionDelete(AuctionPostDeleteRequest $request)
    {
        $this->auction->deleteData($request->id);
        return redirect()->route('auction.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postAuctionCreateAjax]
     * @param  AuctionPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postAuctionCreateAjax(AuctionPostCreateAjaxRequest $request)
    {
        $response = $this->auction->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postAuctionUpdateAjax]
     * @param  AuctionPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postAuctionUpdateAjax(AuctionPostUpdateAjaxRequest $request)
    {
        $response = $this->auction->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postAuctionDeleteAjax]
     * @param  AuctionPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postAuctionDeleteAjax(AuctionPostDeleteAjaxRequest $request)
    {
        $response = $this->auction->deleteData($request->id);
        return response()->json($response);
    }

}
