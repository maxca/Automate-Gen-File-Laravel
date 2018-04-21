<?php
namespace App\Http\Controllers\Zipcode;

use App\Http\Controllers\Controller;
use App\Http\Requests\Zipcode\ZipcodeRequest;
use App\Http\Requests\Zipcode\ZipcodeGetRequest;
use App\Http\Requests\Zipcode\ZipcodeCreateRequest;
use App\Http\Requests\Zipcode\ZipcodeUpdateRequest;
use App\Http\Requests\Zipcode\ZipcodeDeleteRequest;
use App\Repository\Zipcode\ZipcodeRepository;

class ZipcodeController extends Controller
{

    protected $zipcode;

    public function __construct(ZipcodeRepository $zipcode)
    {
        $this->zipcode = $zipcode;
    }
    public function createZipcode(ZipcodeCreateRequest $request)
    {
        $query = $this->zipcode->createData($request->all());
        return response()->json($query); 
    }
    public function getZipcodeList(ZipcodeGetRequest $request)
    {
        $query = $this->zipcode->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteZipcode(ZipcodeDeleteRequest $request)
    {   
        $query = $this->zipcode->delete($request->all());
        return response()->json($query);
    }
    public function updateZipcode(ZipcodeUpdateRequest $request)
    {
        $query = $this->zipcode->updateData($request->all());
        return response()->json($query);   
    }

}
