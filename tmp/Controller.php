<?php
namespace App\Http\Controllers\;

use App\Http\Controllers\Controller;
use App\Http\Requests\\Request;
use App\Http\Requests\\GetRequest;
use App\Http\Requests\\CreateRequest;
use App\Http\Requests\\UpdateRequest;
use App\Http\Requests\\DeleteRequest;
use App\Repository\\Repository;

class Controller extends Controller
{

    protected $;

    public function __construct(Repository $)
    {
        $this-> = $;
    }
    public function create(CreateRequest $request)
    {
        $query = $this->->createData($request->all());
        return response()->json($query); 
    }
    public function getList(GetRequest $request)
    {
        $query = $this->->search($request->all())->getData();
        return response()->json($query);   
    }
    public function delete(DeleteRequest $request)
    {   
        $query = $this->->delete($request->all());
        return response()->json($query);
    }
    public function update(UpdateRequest $request)
    {
        $query = $this->->updateData($request->all());
        return response()->json($query);   
    }

}
