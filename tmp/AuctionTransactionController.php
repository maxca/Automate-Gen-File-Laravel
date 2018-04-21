<?php
namespace App\Http\Controllers\AuctionTransaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuctionTransaction\AuctionTransactionRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionGetRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionCreateRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionUpdateRequest;
use App\Http\Requests\AuctionTransaction\AuctionTransactionDeleteRequest;
use App\Repository\AuctionTransaction\AuctionTransactionRepository;

class AuctionTransactionController extends Controller
{

    protected $auctiontransaction;

    public function __construct(AuctionTransactionRepository $auctiontransaction)
    {
        $this->auctiontransaction = $auctiontransaction;
    }
    public function createAuctionTransaction(AuctionTransactionCreateRequest $request)
    {
        $query = $this->auctiontransaction->createData($request->all());
        return response()->json($query); 
    }
    public function getAuctionTransactionList(AuctionTransactionGetRequest $request)
    {
        $query = $this->auctiontransaction->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteAuctionTransaction(AuctionTransactionDeleteRequest $request)
    {   
        $query = $this->auctiontransaction->delete($request->all());
        return response()->json($query);
    }
    public function updateAuctionTransaction(AuctionTransactionUpdateRequest $request)
    {
        $query = $this->auctiontransaction->updateData($request->all());
        return response()->json($query);   
    }

}
