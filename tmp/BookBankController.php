<?php

namespace App\Http\Controllers\Backend\BookBank;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookBank\BookBankCreateRequest;
use App\Http\Requests\BookBank\BookBankDeleteRequest;
use App\Http\Requests\BookBank\BookBankGetUpdateRequest;
use App\Http\Requests\BookBank\BookBankGetDetailRequest;
use App\Http\Requests\BookBank\BookBankUpdateRequest;
use App\Repositories\BookBank\BookBankRepository;

class BookBankController extends Controller
{
    /**
     * BookBank repository
     * @var object
     */
    protected $bookbank;

    public function __construct(BookBankRepository $bookbank)
    {
        $this->bookbank = $bookbank;
    }
    /**
     * get BookBank show list
     * @return view
     */
    public function getBookBankList()
    {
        return $this->bookbank->getList();
    }

    /**
     * get BookBank form create data
     * @return view
     */
    public function getFormBookBankCreate()
    {
        return $this->bookbank->getCreateForm();
    }

    /**
     * get BookBank form update data
     * @param  GetUpdateBookBankRequest $request
     * @return view
     */
    public function getFormBookBankUpdate(BookBankGetUpdateRequest $request)
    {
        return $this->bookbank->getUpdateForm($request->id);
    }

    /**
     * get BookBank form detail data
     * @return [type] [description]
     */
    public function getBookBankDetail(BookBankGetDetailRequest $request)
    {
        return $this->bookbank->getFormDetail($request->id);
    }

    /**
     * submit create BookBank data to api
     * @param  CreateBookBankRequest $request
     * @return redirect back with flash success
     */
    public function submitFormBookBankCreate(BookBankCreateRequest $request)
    {
        $response = $this->bookbank->createDataApi($request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('bookbank.view')
            ->withFlashSuccess('create bookbank data success');
    }

    /**
     * submit update BookBank data to api
     * @param  UpdateBookBankRequest $request
     * @return redirect back with flash success
     */
    public function submitFormBookBankUpdate(BookBankUpdateRequest $request)
    {
        $response = $this->bookbank->updateDataApi($request->id, $request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('bookbank.view')
            ->withFlashSuccess('update bookbank data success');
    }

    /**
     * submit delete BookBank data to api
     * @param  DeleteBookBankRequest $request
     * @return redirect back with flash success
     */
    public function submitFormBookBankDelete(BookBankDeleteRequest $request)
    {
        $this->bookbank->deleteDataApi($request->id);
        return redirect()->route('bookbank.view')
            ->withFlashSuccess('delete bookbank data success');
    }
}
