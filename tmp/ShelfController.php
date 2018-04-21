<?php

namespace App\Http\Controllers\Backend\Shelf;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shelf\ShelfCreateRequest;
use App\Http\Requests\Shelf\ShelfDeleteRequest;
use App\Http\Requests\Shelf\ShelfGetUpdateRequest;
use App\Http\Requests\Shelf\ShelfGetDetailRequest;
use App\Http\Requests\Shelf\ShelfUpdateRequest;
use App\Repositories\Shelf\ShelfRepository;

class ShelfController extends Controller
{
    /**
     * Shelf repository
     * @var object
     */
    protected $shelf;

    public function __construct(ShelfRepository $shelf)
    {
        $this->shelf = $shelf;
    }
    /**
     * get Shelf show list
     * @return view
     */
    public function getShelfList()
    {
        return $this->shelf->getList();
    }

    /**
     * get Shelf form create data
     * @return view
     */
    public function getFormShelfCreate()
    {
        return $this->shelf->getCreateForm();
    }

    /**
     * get Shelf form update data
     * @param  GetUpdateShelfRequest $request
     * @return view
     */
    public function getFormShelfUpdate(ShelfGetUpdateRequest $request)
    {
        return $this->shelf->getUpdateForm($request->id);
    }

    /**
     * get Shelf form detail data
     * @return [type] [description]
     */
    public function getShelfDetail(ShelfGetDetailRequest $request)
    {
        return $this->shelf->getFormDetail($request->id);
    }

    /**
     * submit create Shelf data to api
     * @param  CreateShelfRequest $request
     * @return redirect back with flash success
     */
    public function submitFormShelfCreate(ShelfCreateRequest $request)
    {
        $this->shelf->createDataApi($request->all());
        return redirect()->route('shelf.view')
            ->withFlashSuccess('create shelf data success');
    }

    /**
     * submit update Shelf data to api
     * @param  UpdateShelfRequest $request
     * @return redirect back with flash success
     */
    public function submitFormShelfUpdate(ShelfUpdateRequest $request)
    {
        $this->shelf->updateDataApi($request->id, $request->all());
        return redirect()->route('shelf.view')
            ->withFlashSuccess('update shelf data success');
    }

    /**
     * submit delete Shelf data to api
     * @param  DeleteShelfRequest $request
     * @return redirect back with flash success
     */
    public function submitFormShelfDelete(ShelfDeleteRequest $request)
    {
        $this->shelf->deleteDataApi($request->id);
        return redirect()->route('shelf.view')
            ->withFlashSuccess('delete shelf data success');
    }
}
