<?php
namespace App\Http\Controllers\AuctionExtraBid;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuctionExtraBid\AuctionExtraBidRequest;
use App\Http\Requests\AuctionExtraBid\AuctionExtraBidGetRequest;
use App\Http\Requests\AuctionExtraBid\AuctionExtraBidCreateRequest;
use App\Http\Requests\AuctionExtraBid\AuctionExtraBidUpdateRequest;
use App\Http\Requests\AuctionExtraBid\AuctionExtraBidDeleteRequest;
use App\Repository\AuctionExtraBid\AuctionExtraBidRepository;

class AuctionExtraBidController extends Controller
{

    protected $auctionextrabid;

    public function __construct(AuctionExtraBidRepository $auctionextrabid)
    {
        $this->auctionextrabid = $auctionextrabid;
    }
    public function createAuctionExtraBid(AuctionExtraBidCreateRequest $request)
    {
        $query = $this->auctionextrabid->createData($request->all());
        return response()->json($query); 
    }
    public function getAuctionExtraBidList(AuctionExtraBidGetRequest $request)
    {
        $query = $this->auctionextrabid->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteAuctionExtraBid(AuctionExtraBidDeleteRequest $request)
    {   
        $query = $this->auctionextrabid->delete($request->all());
        return response()->json($query);
    }
    public function updateAuctionExtraBid(AuctionExtraBidUpdateRequest $request)
    {
        $query = $this->auctionextrabid->updateData($request->all());
        return response()->json($query);   
    }

}
