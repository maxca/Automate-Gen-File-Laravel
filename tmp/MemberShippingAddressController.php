<?php
namespace App\Http\Controllers\MemberShippingAddress;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberShippingAddress\MemberShippingAddressRequest;
use App\Http\Requests\MemberShippingAddress\MemberShippingAddressGetRequest;
use App\Http\Requests\MemberShippingAddress\MemberShippingAddressCreateRequest;
use App\Http\Requests\MemberShippingAddress\MemberShippingAddressUpdateRequest;
use App\Http\Requests\MemberShippingAddress\MemberShippingAddressDeleteRequest;
use App\Repository\MemberShippingAddress\MemberShippingAddressRepository;

class MemberShippingAddressController extends Controller
{

    protected $membershippingaddress;

    public function __construct(MemberShippingAddressRepository $membershippingaddress)
    {
        $this->membershippingaddress = $membershippingaddress;
    }
    public function createMemberShippingAddress(MemberShippingAddressCreateRequest $request)
    {
        $query = $this->membershippingaddress->createData($request->all());
        return response()->json($query); 
    }
    public function getMemberShippingAddressList(MemberShippingAddressGetRequest $request)
    {
        $query = $this->membershippingaddress->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteMemberShippingAddress(MemberShippingAddressDeleteRequest $request)
    {   
        $query = $this->membershippingaddress->delete($request->all());
        return response()->json($query);
    }
    public function updateMemberShippingAddress(MemberShippingAddressUpdateRequest $request)
    {
        $query = $this->membershippingaddress->updateData($request->all());
        return response()->json($query);   
    }

}
