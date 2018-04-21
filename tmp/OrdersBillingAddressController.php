<?php
namespace App\Http\Controllers\OrdersBillingAddress;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersBillingAddress\OrdersBillingAddressRequest;
use App\Http\Requests\OrdersBillingAddress\OrdersBillingAddressGetRequest;
use App\Http\Requests\OrdersBillingAddress\OrdersBillingAddressCreateRequest;
use App\Http\Requests\OrdersBillingAddress\OrdersBillingAddressUpdateRequest;
use App\Http\Requests\OrdersBillingAddress\OrdersBillingAddressDeleteRequest;
use App\Repository\OrdersBillingAddress\OrdersBillingAddressRepository;

class OrdersBillingAddressController extends Controller
{

    protected $ordersbillingaddress;

    public function __construct(OrdersBillingAddressRepository $ordersbillingaddress)
    {
        $this->ordersbillingaddress = $ordersbillingaddress;
    }
    public function createOrdersBillingAddress(OrdersBillingAddressCreateRequest $request)
    {
        $query = $this->ordersbillingaddress->createData($request->all());
        return response()->json($query); 
    }
    public function getOrdersBillingAddressList(OrdersBillingAddressGetRequest $request)
    {
        $query = $this->ordersbillingaddress->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOrdersBillingAddress(OrdersBillingAddressDeleteRequest $request)
    {   
        $query = $this->ordersbillingaddress->delete($request->all());
        return response()->json($query);
    }
    public function updateOrdersBillingAddress(OrdersBillingAddressUpdateRequest $request)
    {
        $query = $this->ordersbillingaddress->updateData($request->all());
        return response()->json($query);   
    }

}
