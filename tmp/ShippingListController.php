<?php
namespace App\Http\Controllers\ShippingList;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingList\ShippingListRequest;
use App\Http\Requests\ShippingList\ShippingListGetRequest;
use App\Http\Requests\ShippingList\ShippingListCreateRequest;
use App\Http\Requests\ShippingList\ShippingListUpdateRequest;
use App\Http\Requests\ShippingList\ShippingListDeleteRequest;
use App\Repository\ShippingList\ShippingListRepository;

class ShippingListController extends Controller
{

    protected $shippinglist;

    public function __construct(ShippingListRepository $shippinglist)
    {
        $this->shippinglist = $shippinglist;
    }
    public function createShippingList(ShippingListCreateRequest $request)
    {
        $query = $this->shippinglist->createData($request->all());
        return response()->json($query); 
    }
    public function getShippingListList(ShippingListGetRequest $request)
    {
        $query = $this->shippinglist->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteShippingList(ShippingListDeleteRequest $request)
    {   
        $query = $this->shippinglist->delete($request->all());
        return response()->json($query);
    }
    public function updateShippingList(ShippingListUpdateRequest $request)
    {
        $query = $this->shippinglist->updateData($request->all());
        return response()->json($query);   
    }

}
