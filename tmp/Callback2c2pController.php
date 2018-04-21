<?php
namespace App\Http\Controllers\Callback2c2p;

use App\Http\Controllers\Controller;
use App\Http\Requests\Callback2c2p\Callback2c2pRequest;
use App\Http\Requests\Callback2c2p\Callback2c2pGetRequest;
use App\Http\Requests\Callback2c2p\Callback2c2pCreateRequest;
use App\Http\Requests\Callback2c2p\Callback2c2pUpdateRequest;
use App\Http\Requests\Callback2c2p\Callback2c2pDeleteRequest;
use App\Repository\Callback2c2p\Callback2c2pRepository;

class Callback2c2pController extends Controller
{

    protected $callback2c2p;

    public function __construct(Callback2c2pRepository $callback2c2p)
    {
        $this->callback2c2p = $callback2c2p;
    }
    public function createCallback2c2p(Callback2c2pCreateRequest $request)
    {
        $query = $this->callback2c2p->createData($request->all());
        return response()->json($query); 
    }
    public function getCallback2c2pList(Callback2c2pGetRequest $request)
    {
        $query = $this->callback2c2p->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteCallback2c2p(Callback2c2pDeleteRequest $request)
    {   
        $query = $this->callback2c2p->delete($request->all());
        return response()->json($query);
    }
    public function updateCallback2c2p(Callback2c2pUpdateRequest $request)
    {
        $query = $this->callback2c2p->updateData($request->all());
        return response()->json($query);   
    }

}
