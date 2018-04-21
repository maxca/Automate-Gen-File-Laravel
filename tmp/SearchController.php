<?php

namespace App\Http\Controllers\Backend\Search;

use App\Http\Controllers\Controller;
use App\Http\Requests\Search\SearchCreateRequest;
use App\Http\Requests\Search\SearchDeleteRequest;
use App\Http\Requests\Search\SearchGetUpdateRequest;
use App\Http\Requests\Search\SearchGetDetailRequest;
use App\Http\Requests\Search\SearchUpdateRequest;
use App\Repositories\Search\SearchRepository;

class SearchController extends Controller
{
    /**
     * Search repository
     * @var object
     */
    protected $search;

    public function __construct(SearchRepository $search)
    {
        $this->search = $search;
    }
    /**
     * get Search show list
     * @return view
     */
    public function getSearchList()
    {
        return $this->search->getList();
    }

    /**
     * get Search form create data
     * @return view
     */
    public function getFormSearchCreate()
    {
        return $this->search->getCreateForm();
    }

    /**
     * get Search form update data
     * @param  GetUpdateSearchRequest $request
     * @return view
     */
    public function getFormSearchUpdate(SearchGetUpdateRequest $request)
    {
        return $this->search->getUpdateForm($request->id);
    }

    /**
     * get Search form detail data
     * @return [type] [description]
     */
    public function getSearchDetail(SearchGetDetailRequest $request)
    {
        return $this->search->getFormDetail($request->id);
    }

    /**
     * submit create Search data to api
     * @param  CreateSearchRequest $request
     * @return redirect back with flash success
     */
    public function submitFormSearchCreate(SearchCreateRequest $request)
    {
        $this->search->createDataApi($request->all());
        return redirect()->route('search.view')
            ->withFlashSuccess('create search data success');
    }

    /**
     * submit update Search data to api
     * @param  UpdateSearchRequest $request
     * @return redirect back with flash success
     */
    public function submitFormSearchUpdate(SearchUpdateRequest $request)
    {
        $this->search->updateDataApi($request->id, $request->all());
        return redirect()->route('search.view')
            ->withFlashSuccess('update search data success');
    }

    /**
     * submit delete Search data to api
     * @param  DeleteSearchRequest $request
     * @return redirect back with flash success
     */
    public function submitFormSearchDelete(SearchDeleteRequest $request)
    {
        $this->search->deleteDataApi($request->id);
        return redirect()->route('search.view')
            ->withFlashSuccess('delete search data success');
    }
}
