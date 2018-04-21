<?php
namespace App\Http\Controllers\ReportApiAudit;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportApiAudit\ReportApiAuditRequest;
use App\Http\Requests\ReportApiAudit\ReportApiAuditGetRequest;
use App\Http\Requests\ReportApiAudit\ReportApiAuditCreateRequest;
use App\Http\Requests\ReportApiAudit\ReportApiAuditUpdateRequest;
use App\Http\Requests\ReportApiAudit\ReportApiAuditDeleteRequest;
use App\Repository\ReportApiAudit\ReportApiAuditRepository;

class ReportApiAuditController extends Controller
{

    protected $reportapiaudit;

    public function __construct(ReportApiAuditRepository $reportapiaudit)
    {
        $this->reportapiaudit = $reportapiaudit;
    }
    public function createReportApiAudit(ReportApiAuditCreateRequest $request)
    {
        $query = $this->reportapiaudit->createData($request->all());
        return response()->json($query); 
    }
    public function getReportApiAuditList(ReportApiAuditGetRequest $request)
    {
        $query = $this->reportapiaudit->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteReportApiAudit(ReportApiAuditDeleteRequest $request)
    {   
        $query = $this->reportapiaudit->delete($request->all());
        return response()->json($query);
    }
    public function updateReportApiAudit(ReportApiAuditUpdateRequest $request)
    {
        $query = $this->reportapiaudit->updateData($request->all());
        return response()->json($query);   
    }

}
