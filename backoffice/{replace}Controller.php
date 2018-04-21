<?php

namespace App\Http\Controllers\Backend\{replace};

use App\Http\Controllers\Controller;
use App\Http\Requests\{replace}\{replace}CreateRequest;
use App\Http\Requests\{replace}\{replace}DeleteRequest;
use App\Http\Requests\{replace}\{replace}GetUpdateRequest;
use App\Http\Requests\{replace}\{replace}GetDetailRequest;
use App\Http\Requests\{replace}\{replace}UpdateRequest;
use App\Repositories\{replace}\{replace}Repository;

class {replace}Controller extends Controller
{
    /**
     * {replace} repository
     * @var object
     */
    protected ${replace_sm};

    public function __construct({replace}Repository ${replace_sm})
    {
        $this->{replace_sm} = ${replace_sm};
    }
    /**
     * get {replace} show list
     * @return view
     */
    public function get{replace}List()
    {
        return $this->{replace_sm}->getList();
    }

    /**
     * get {replace} form create data
     * @return view
     */
    public function getForm{replace}Create()
    {
        return $this->{replace_sm}->getCreateForm();
    }

    /**
     * get {replace} form update data
     * @param  GetUpdate{replace}Request $request
     * @return view
     */
    public function getForm{replace}Update({replace}GetUpdateRequest $request)
    {
        return $this->{replace_sm}->getUpdateForm($request->id);
    }

    /**
     * get {replace} form detail data
     * @return [type] [description]
     */
    public function get{replace}Detail({replace}GetDetailRequest $request)
    {
        return $this->{replace_sm}->getFormDetail($request->id);
    }

    /**
     * submit create {replace} data to api
     * @param  Create{replace}Request $request
     * @return redirect back with flash success
     */
    public function submitForm{replace}Create({replace}CreateRequest $request)
    {
        $response = $this->{replace_sm}->createDataApi($request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('{replace_sm}.view')
            ->withFlashSuccess('create {replace_sm} data success');
    }

    /**
     * submit update {replace} data to api
     * @param  Update{replace}Request $request
     * @return redirect back with flash success
     */
    public function submitForm{replace}Update({replace}UpdateRequest $request)
    {
        $response = $this->{replace_sm}->updateDataApi($request->id, $request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('{replace_sm}.view')
            ->withFlashSuccess('update {replace_sm} data success');
    }

    /**
     * submit delete {replace} data to api
     * @param  Delete{replace}Request $request
     * @return redirect back with flash success
     */
    public function submitForm{replace}Delete({replace}DeleteRequest $request)
    {
        $this->{replace_sm}->deleteDataApi($request->id);
        return redirect()->route('{replace_sm}.view')
            ->withFlashSuccess('delete {replace_sm} data success');
    }
}
