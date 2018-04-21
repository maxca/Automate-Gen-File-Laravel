<?php
namespace App\Http\Controllers\ServiceDesk;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceDesk\ServiceDeskRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskGetRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskCreateRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskUpdateRequest;
use App\Http\Requests\ServiceDesk\ServiceDeskDeleteRequest;
use App\Repository\ServiceDesk\ServiceDeskRepository;

class ServiceDeskController extends Controller
{

    protected $servicedesk;

    public function __construct(ServiceDeskRepository $servicedesk)
    {
        $this->servicedesk = $servicedesk;
    }
    public function createServiceDesk(ServiceDeskCreateRequest $request)
    {
        $query = $this->servicedesk->createData($request->all());
        return response()->json($query); 
    }
    public function getServiceDeskList(ServiceDeskGetRequest $request)
    {
        $query = $this->servicedesk->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteServiceDesk(ServiceDeskDeleteRequest $request)
    {   
        $query = $this->servicedesk->delete($request->all());
        return response()->json($query);
    }
    public function updateServiceDesk(ServiceDeskUpdateRequest $request)
    {
        $query = $this->servicedesk->updateData($request->all());
        return response()->json($query);   
    }

}
