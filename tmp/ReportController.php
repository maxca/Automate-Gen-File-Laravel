<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use App\Http\Requests\Report\ReportCreateRequest;
use App\Http\Requests\Report\ReportDeleteRequest;
use App\Http\Requests\Report\ReportGetUpdateRequest;
use App\Http\Requests\Report\ReportGetDetailRequest;
use App\Http\Requests\Report\ReportUpdateRequest;
use App\Repositories\Report\ReportRepository;

class ReportController extends Controller
{
    /**
     * Report repository
     * @var object
     */
    protected $report;

    public function __construct(ReportRepository $report)
    {
        $this->report = $report;
    }
    /**
     * get Report show list
     * @return view
     */
    public function getReportList()
    {
        return $this->report->getList();
    }

    /**
     * get Report form create data
     * @return view
     */
    public function getFormReportCreate()
    {
        return $this->report->getCreateForm();
    }

    /**
     * get Report form update data
     * @param  GetUpdateReportRequest $request
     * @return view
     */
    public function getFormReportUpdate(ReportGetUpdateRequest $request)
    {
        return $this->report->getUpdateForm($request->id);
    }

    /**
     * get Report form detail data
     * @return [type] [description]
     */
    public function getReportDetail(ReportGetDetailRequest $request)
    {
        return $this->report->getFormDetail($request->id);
    }

    /**
     * submit create Report data to api
     * @param  CreateReportRequest $request
     * @return redirect back with flash success
     */
    public function submitFormReportCreate(ReportCreateRequest $request)
    {
        $this->report->createDataApi($request->all());
        return redirect()->route('report.view')
            ->withFlashSuccess('create report data success');
    }

    /**
     * submit update Report data to api
     * @param  UpdateReportRequest $request
     * @return redirect back with flash success
     */
    public function submitFormReportUpdate(ReportUpdateRequest $request)
    {
        $this->report->updateDataApi($request->id, $request->all());
        return redirect()->route('report.view')
            ->withFlashSuccess('update report data success');
    }

    /**
     * submit delete Report data to api
     * @param  DeleteReportRequest $request
     * @return redirect back with flash success
     */
    public function submitFormReportDelete(ReportDeleteRequest $request)
    {
        $this->report->deleteDataApi($request->id);
        return redirect()->route('report.view')
            ->withFlashSuccess('delete report data success');
    }
}
