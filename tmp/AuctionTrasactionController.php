<?php
namespace App\Http\Controllers\AuctionTrasaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuctionTrasaction\AuctionTrasactionRequest;
use App\Http\Requests\AuctionTrasaction\AuctionTrasactionGetRequest;
use App\Http\Requests\AuctionTrasaction\AuctionTrasactionCreateRequest;
use App\Http\Requests\AuctionTrasaction\AuctionTrasactionUpdateRequest;
use App\Http\Requests\AuctionTrasaction\AuctionTrasactionDeleteRequest;
use App\Repository\AuctionTrasaction\AuctionTrasactionRepository;

class AuctionTrasactionController extends Controller
{

    protected $auctiontrasaction;

    public function __construct(AuctionTrasactionRepository $auctiontrasaction)
    {
        $this->auctiontrasaction = $auctiontrasaction;
    }
    public function createAuctionTrasaction(AuctionTrasactionCreateRequest $request)
    {
        $query = $this->auctiontrasaction->createData($request->all());
        return response()->json($query); 
    }
    public function getAuctionTrasactionList(AuctionTrasactionGetRequest $request)
    {
        $query = $this->auctiontrasaction->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteAuctionTrasaction(AuctionTrasactionDeleteRequest $request)
    {   
        $query = $this->auctiontrasaction->delete($request->all());
        return response()->json($query);
    }
    public function updateAuctionTrasaction(AuctionTrasactionUpdateRequest $request)
    {
        $query = $this->auctiontrasaction->updateData($request->all());
        return response()->json($query);   
    }

}
