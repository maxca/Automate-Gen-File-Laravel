<?php
namespace App\Http\Controllers\CompareData;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompareData\CompareDataRequest;
use App\Http\Requests\CompareData\CompareDataGetRequest;
use App\Http\Requests\CompareData\CompareDataCreateRequest;
use App\Http\Requests\CompareData\CompareDataUpdateRequest;
use App\Http\Requests\CompareData\CompareDataDeleteRequest;
use App\Repository\CompareData\CompareDataRepository;

class CompareDataController extends Controller
{

    protected $comparedata;

    public function __construct(CompareDataRepository $comparedata)
    {
        $this->comparedata = $comparedata;
    }
    public function createCompareData(CompareDataCreateRequest $request)
    {
        $query = $this->comparedata->createData($request->all());
        return response()->json($query); 
    }
    public function getCompareDataList(CompareDataGetRequest $request)
    {
        $query = $this->comparedata->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteCompareData(CompareDataDeleteRequest $request)
    {   
        $query = $this->comparedata->delete($request->all());
        return response()->json($query);
    }
    public function updateCompareData(CompareDataUpdateRequest $request)
    {
        $query = $this->comparedata->updateData($request->all());
        return response()->json($query);   
    }

}
