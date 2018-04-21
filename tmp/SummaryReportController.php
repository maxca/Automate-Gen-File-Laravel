<?php
namespace App\Http\Controllers\SummaryReport;

use App\Http\Controllers\Controller;
use App\Http\Requests\SummaryReport\SummaryReportRequest;
use App\Http\Requests\SummaryReport\SummaryReportGetRequest;
use App\Http\Requests\SummaryReport\SummaryReportCreateRequest;
use App\Http\Requests\SummaryReport\SummaryReportUpdateRequest;
use App\Http\Requests\SummaryReport\SummaryReportDeleteRequest;
use App\Repository\SummaryReport\SummaryReportRepository;

class SummaryReportController extends Controller
{

    protected $summaryreport;

    public function __construct(SummaryReportRepository $summaryreport)
    {
        $this->summaryreport = $summaryreport;
    }
    public function createSummaryReport(SummaryReportCreateRequest $request)
    {
        $query = $this->summaryreport->createData($request->all());
        return response()->json($query); 
    }
    public function getSummaryReportList(SummaryReportGetRequest $request)
    {
        $query = $this->summaryreport->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteSummaryReport(SummaryReportDeleteRequest $request)
    {   
        $query = $this->summaryreport->delete($request->all());
        return response()->json($query);
    }
    public function updateSummaryReport(SummaryReportUpdateRequest $request)
    {
        $query = $this->summaryreport->updateData($request->all());
        return response()->json($query);   
    }

}
