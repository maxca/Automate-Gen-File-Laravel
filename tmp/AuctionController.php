<?php
namespace App\Http\Controllers\Auction;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auction\AuctionRequest;
use App\Http\Requests\Auction\AuctionGetRequest;
use App\Http\Requests\Auction\AuctionCreateRequest;
use App\Http\Requests\Auction\AuctionUpdateRequest;
use App\Http\Requests\Auction\AuctionDeleteRequest;
use App\Repository\Auction\AuctionRepository;

class AuctionController extends Controller
{

    protected $auction;

    public function __construct(AuctionRepository $auction)
    {
        $this->auction = $auction;
    }
    public function createAuction(AuctionCreateRequest $request)
    {
        $query = $this->auction->createData($request->all());
        return response()->json($query); 
    }
    public function getAuctionList(AuctionGetRequest $request)
    {
        $query = $this->auction->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteAuction(AuctionDeleteRequest $request)
    {   
        $query = $this->auction->delete($request->all());
        return response()->json($query);
    }
    public function updateAuction(AuctionUpdateRequest $request)
    {
        $query = $this->auction->updateData($request->all());
        return response()->json($query);   
    }

}
