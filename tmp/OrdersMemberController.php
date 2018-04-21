<?php
namespace App\Http\Controllers\OrdersMember;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersMember\OrdersMemberRequest;
use App\Http\Requests\OrdersMember\OrdersMemberGetRequest;
use App\Http\Requests\OrdersMember\OrdersMemberCreateRequest;
use App\Http\Requests\OrdersMember\OrdersMemberUpdateRequest;
use App\Http\Requests\OrdersMember\OrdersMemberDeleteRequest;
use App\Repository\OrdersMember\OrdersMemberRepository;

class OrdersMemberController extends Controller
{

    protected $ordersmember;

    public function __construct(OrdersMemberRepository $ordersmember)
    {
        $this->ordersmember = $ordersmember;
    }
    public function createOrdersMember(OrdersMemberCreateRequest $request)
    {
        $query = $this->ordersmember->createData($request->all());
        return response()->json($query); 
    }
    public function getOrdersMemberList(OrdersMemberGetRequest $request)
    {
        $query = $this->ordersmember->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOrdersMember(OrdersMemberDeleteRequest $request)
    {   
        $query = $this->ordersmember->delete($request->all());
        return response()->json($query);
    }
    public function updateOrdersMember(OrdersMemberUpdateRequest $request)
    {
        $query = $this->ordersmember->updateData($request->all());
        return response()->json($query);   
    }

}
