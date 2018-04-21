<?php
namespace App\Http\Controllers\ShippopHistory;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShippopHistory\ShippopHistoryRequest;
use App\Http\Requests\ShippopHistory\ShippopHistoryGetRequest;
use App\Http\Requests\ShippopHistory\ShippopHistoryCreateRequest;
use App\Http\Requests\ShippopHistory\ShippopHistoryUpdateRequest;
use App\Http\Requests\ShippopHistory\ShippopHistoryDeleteRequest;
use App\Repository\ShippopHistory\ShippopHistoryRepository;

class ShippopHistoryController extends Controller
{

    protected $shippophistory;

    public function __construct(ShippopHistoryRepository $shippophistory)
    {
        $this->shippophistory = $shippophistory;
    }
    public function createShippopHistory(ShippopHistoryCreateRequest $request)
    {
        $query = $this->shippophistory->createData($request->all());
        return response()->json($query); 
    }
    public function getShippopHistoryList(ShippopHistoryGetRequest $request)
    {
        $query = $this->shippophistory->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteShippopHistory(ShippopHistoryDeleteRequest $request)
    {   
        $query = $this->shippophistory->delete($request->all());
        return response()->json($query);
    }
    public function updateShippopHistory(ShippopHistoryUpdateRequest $request)
    {
        $query = $this->shippophistory->updateData($request->all());
        return response()->json($query);   
    }

}
