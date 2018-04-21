<?php
namespace App\Http\Controllers\{replace};

use App\Http\Controllers\Controller;
use App\Http\Requests\{replace}\{replace}GetDetailViewRequest;
use App\Http\Requests\{replace}\{replace}GetEditViewRequest;
use App\Http\Requests\{replace}\{replace}GetViewRequest;
use App\Http\Requests\{replace}\{replace}PostCreateAjaxRequest;
use App\Http\Requests\{replace}\{replace}PostCreateRequest;
use App\Http\Requests\{replace}\{replace}PostDeleteAjaxRequest;
use App\Http\Requests\{replace}\{replace}PostDeleteRequest;
use App\Http\Requests\{replace}\{replace}PostUpdateAjaxRequest;
use App\Http\Requests\{replace}\{replace}PostUpdateRequest;
use App\Repository\{replace}\{replace}Repository;

class {replace}Controller extends Controller
{
    /**
     * {replace_sm} repository
     * @var object class
     */
    protected ${replace_sm};

    public function __construct({replace}Repository ${replace_sm})
    {
        $this->{replace_sm} = ${replace_sm};
    }

    /**
     * [get{replace}ListView]
     * @param  {replace}GetViewRequest $request [validation]
     * @return view object
     */
    public function get{replace}ListView()
    {
        return $this->{replace_sm}->getViewList();
    }

    /**
     * [get{replace}DetailView]
     * @param  {replace}GetDetailViewRequest $request [validation]
     * @return view object
     */
    public function get{replace}DetailView({replace}GetDetailViewRequest $request)
    {
        return $this->{replace_sm}->getViewDetail($request->id);
    }

    /**
     * [get{replace}EditView]
     * @param  {replace}GetEditViewRequest $request [validate]
     * @return view object
     */
    public function get{replace}EditView({replace}GetEditViewRequest $request)
    {
        return $this->{replace_sm}->getViewEdit($request->id);
    }

    /**
     * [get{replace}CreateView]
     * @return view object
     */
    public function get{replace}CreateView()
    {
        return $this->{replace_sm}->getViewCreate();
    }

    /**
     * [post{replace}Create]
     * @param  {replace}PostCreateRequest $request [validate]
     * @return redirect
     */
    public function post{replace}Create({replace}PostCreateRequest $request)
    {
        $this->{replace_sm}->createData($request->all());
        return redirect()->route('{replace_snc}.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [post{replace}Update]
     * @param  {replace}PostUpdateRequest $request [validate]
     * @return redirect
     */
    public function post{replace}Update({replace}PostUpdateRequest $request)
    {
        $this->{replace_sm}->upadateData($request->all());
        return redirect()->route('{replace_snc}.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [post{replace}Delete]
     * @param  {replace}PostUpdateRequest $request [validate]
     * @return redirect
     */
    public function post{replace}Delete({replace}PostDeleteRequest $request)
    {
        $this->{replace_sm}->deleteData($request->id);
        return redirect()->route('{replace_snc}.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [post{replace}CreateAjax]
     * @param  {replace}PostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function post{replace}CreateAjax({replace}PostCreateAjaxRequest $request)
    {
        $response = $this->{replace_sm}->createData($request->all());
        return response()->json($response);
    }

    /**
     * [post{replace}UpdateAjax]
     * @param  {replace}PostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function post{replace}UpdateAjax({replace}PostUpdateAjaxRequest $request)
    {
        $response = $this->{replace_sm}->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [post{replace}DeleteAjax]
     * @param  {replace}PostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function post{replace}DeleteAjax({replace}PostDeleteAjaxRequest $request)
    {
        $response = $this->{replace_sm}->deleteData($request->id);
        return response()->json($response);
    }

}
