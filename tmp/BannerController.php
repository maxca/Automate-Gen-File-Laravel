<?php

namespace App\Http\Controllers\Backend\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\BannerCreateRequest;
use App\Http\Requests\Banner\BannerDeleteRequest;
use App\Http\Requests\Banner\BannerGetUpdateRequest;
use App\Http\Requests\Banner\BannerGetDetailRequest;
use App\Http\Requests\Banner\BannerUpdateRequest;
use App\Repositories\Banner\BannerRepository;

class BannerController extends Controller
{
    /**
     * Banner repository
     * @var object
     */
    protected $banner;

    public function __construct(BannerRepository $banner)
    {
        $this->banner = $banner;
    }
    /**
     * get Banner show list
     * @return view
     */
    public function getBannerList()
    {
        return $this->banner->getList();
    }

    /**
     * get Banner form create data
     * @return view
     */
    public function getFormBannerCreate()
    {
        return $this->banner->getCreateForm();
    }

    /**
     * get Banner form update data
     * @param  GetUpdateBannerRequest $request
     * @return view
     */
    public function getFormBannerUpdate(BannerGetUpdateRequest $request)
    {
        return $this->banner->getUpdateForm($request->id);
    }

    /**
     * get Banner form detail data
     * @return [type] [description]
     */
    public function getBannerDetail(BannerGetDetailRequest $request)
    {
        return $this->banner->getFormDetail($request->id);
    }

    /**
     * submit create Banner data to api
     * @param  CreateBannerRequest $request
     * @return redirect back with flash success
     */
    public function submitFormBannerCreate(BannerCreateRequest $request)
    {
        $this->banner->createDataApi($request->all());
        return redirect()->route('banner.view')
            ->withFlashSuccess('create banner data success');
    }

    /**
     * submit update Banner data to api
     * @param  UpdateBannerRequest $request
     * @return redirect back with flash success
     */
    public function submitFormBannerUpdate(BannerUpdateRequest $request)
    {
        $this->banner->updateDataApi($request->id, $request->all());
        return redirect()->route('banner.view')
            ->withFlashSuccess('update banner data success');
    }

    /**
     * submit delete Banner data to api
     * @param  DeleteBannerRequest $request
     * @return redirect back with flash success
     */
    public function submitFormBannerDelete(BannerDeleteRequest $request)
    {
        $this->banner->deleteDataApi($request->id);
        return redirect()->route('banner.view')
            ->withFlashSuccess('delete banner data success');
    }
}
