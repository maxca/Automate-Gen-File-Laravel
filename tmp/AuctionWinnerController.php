<?php

namespace App\Http\Controllers\Backend\AuctionWinner;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuctionWinner\AuctionWinnerCreateRequest;
use App\Http\Requests\AuctionWinner\AuctionWinnerDeleteRequest;
use App\Http\Requests\AuctionWinner\AuctionWinnerGetUpdateRequest;
use App\Http\Requests\AuctionWinner\AuctionWinnerGetDetailRequest;
use App\Http\Requests\AuctionWinner\AuctionWinnerUpdateRequest;
use App\Repositories\AuctionWinner\AuctionWinnerRepository;

class AuctionWinnerController extends Controller
{
    /**
     * AuctionWinner repository
     * @var object
     */
    protected $auctionwinner;

    public function __construct(AuctionWinnerRepository $auctionwinner)
    {
        $this->auctionwinner = $auctionwinner;
    }
    /**
     * get AuctionWinner show list
     * @return view
     */
    public function getAuctionWinnerList()
    {
        return $this->auctionwinner->getList();
    }

    /**
     * get AuctionWinner form create data
     * @return view
     */
    public function getFormAuctionWinnerCreate()
    {
        return $this->auctionwinner->getCreateForm();
    }

    /**
     * get AuctionWinner form update data
     * @param  GetUpdateAuctionWinnerRequest $request
     * @return view
     */
    public function getFormAuctionWinnerUpdate(AuctionWinnerGetUpdateRequest $request)
    {
        return $this->auctionwinner->getUpdateForm($request->id);
    }

    /**
     * get AuctionWinner form detail data
     * @return [type] [description]
     */
    public function getAuctionWinnerDetail(AuctionWinnerGetDetailRequest $request)
    {
        return $this->auctionwinner->getFormDetail($request->id);
    }

    /**
     * submit create AuctionWinner data to api
     * @param  CreateAuctionWinnerRequest $request
     * @return redirect back with flash success
     */
    public function submitFormAuctionWinnerCreate(AuctionWinnerCreateRequest $request)
    {
        $response = $this->auctionwinner->createDataApi($request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('auctionwinner.view')
            ->withFlashSuccess('create auctionwinner data success');
    }

    /**
     * submit update AuctionWinner data to api
     * @param  UpdateAuctionWinnerRequest $request
     * @return redirect back with flash success
     */
    public function submitFormAuctionWinnerUpdate(AuctionWinnerUpdateRequest $request)
    {
        $response = $this->auctionwinner->updateDataApi($request->id, $request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('auctionwinner.view')
            ->withFlashSuccess('update auctionwinner data success');
    }

    /**
     * submit delete AuctionWinner data to api
     * @param  DeleteAuctionWinnerRequest $request
     * @return redirect back with flash success
     */
    public function submitFormAuctionWinnerDelete(AuctionWinnerDeleteRequest $request)
    {
        $this->auctionwinner->deleteDataApi($request->id);
        return redirect()->route('auctionwinner.view')
            ->withFlashSuccess('delete auctionwinner data success');
    }
}
