<?php

namespace App\Http\Controllers\Backend\Point;

use App\Http\Controllers\Controller;
use App\Http\Requests\Point\PointCreateRequest;
use App\Http\Requests\Point\PointDeleteRequest;
use App\Http\Requests\Point\PointGetUpdateRequest;
use App\Http\Requests\Point\PointGetDetailRequest;
use App\Http\Requests\Point\PointUpdateRequest;
use App\Repositories\Point\PointRepository;

class PointController extends Controller
{
    /**
     * Point repository
     * @var object
     */
    protected $point;

    public function __construct(PointRepository $point)
    {
        $this->point = $point;
    }
    /**
     * get Point show list
     * @return view
     */
    public function getPointList()
    {
        return $this->point->getList();
    }

    /**
     * get Point form create data
     * @return view
     */
    public function getFormPointCreate()
    {
        return $this->point->getCreateForm();
    }

    /**
     * get Point form update data
     * @param  GetUpdatePointRequest $request
     * @return view
     */
    public function getFormPointUpdate(PointGetUpdateRequest $request)
    {
        return $this->point->getUpdateForm($request->id);
    }

    /**
     * get Point form detail data
     * @return [type] [description]
     */
    public function getPointDetail(PointGetDetailRequest $request)
    {
        return $this->point->getFormDetail($request->id);
    }

    /**
     * submit create Point data to api
     * @param  CreatePointRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPointCreate(PointCreateRequest $request)
    {
        $response = $this->point->createDataApi($request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('point.view')
            ->withFlashSuccess('create point data success');
    }

    /**
     * submit update Point data to api
     * @param  UpdatePointRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPointUpdate(PointUpdateRequest $request)
    {
        $response = $this->point->updateDataApi($request->id, $request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('point.view')
            ->withFlashSuccess('update point data success');
    }

    /**
     * submit delete Point data to api
     * @param  DeletePointRequest $request
     * @return redirect back with flash success
     */
    public function submitFormPointDelete(PointDeleteRequest $request)
    {
        $this->point->deleteDataApi($request->id);
        return redirect()->route('point.view')
            ->withFlashSuccess('delete point data success');
    }
}
