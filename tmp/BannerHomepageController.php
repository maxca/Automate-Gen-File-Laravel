<?php

namespace App\Http\Controllers\Backend\BannerHomepage;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerHomepage\BannerHomepageCreateRequest;
use App\Http\Requests\BannerHomepage\BannerHomepageDeleteRequest;
use App\Http\Requests\BannerHomepage\BannerHomepageGetUpdateRequest;
use App\Http\Requests\BannerHomepage\BannerHomepageGetDetailRequest;
use App\Http\Requests\BannerHomepage\BannerHomepageUpdateRequest;
use App\Repositories\BannerHomepage\BannerHomepageRepository;

class BannerHomepageController extends Controller
{
    /**
     * BannerHomepage repository
     * @var object
     */
    protected $bannerhomepage;

    public function __construct(BannerHomepageRepository $bannerhomepage)
    {
        $this->bannerhomepage = $bannerhomepage;
    }
    /**
     * get BannerHomepage show list
     * @return view
     */
    public function getBannerHomepageList()
    {
        return $this->bannerhomepage->getList();
    }

    /**
     * get BannerHomepage form create data
     * @return view
     */
    public function getFormBannerHomepageCreate()
    {
        return $this->bannerhomepage->getCreateForm();
    }

    /**
     * get BannerHomepage form update data
     * @param  GetUpdateBannerHomepageRequest $request
     * @return view
     */
    public function getFormBannerHomepageUpdate(BannerHomepageGetUpdateRequest $request)
    {
        return $this->bannerhomepage->getUpdateForm($request->id);
    }

    /**
     * get BannerHomepage form detail data
     * @return [type] [description]
     */
    public function getBannerHomepageDetail(BannerHomepageGetDetailRequest $request)
    {
        return $this->bannerhomepage->getFormDetail($request->id);
    }

    /**
     * submit create BannerHomepage data to api
     * @param  CreateBannerHomepageRequest $request
     * @return redirect back with flash success
     */
    public function submitFormBannerHomepageCreate(BannerHomepageCreateRequest $request)
    {
        $response = $this->bannerhomepage->createDataApi($request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('bannerhomepage.view')
            ->withFlashSuccess('create bannerhomepage data success');
    }

    /**
     * submit update BannerHomepage data to api
     * @param  UpdateBannerHomepageRequest $request
     * @return redirect back with flash success
     */
    public function submitFormBannerHomepageUpdate(BannerHomepageUpdateRequest $request)
    {
        $response = $this->bannerhomepage->updateDataApi($request->id, $request->all());
        if ($response->header->code != 200) {
            return redirect()->back()->withErrors($response->data);
        }
        return redirect()->route('bannerhomepage.view')
            ->withFlashSuccess('update bannerhomepage data success');
    }

    /**
     * submit delete BannerHomepage data to api
     * @param  DeleteBannerHomepageRequest $request
     * @return redirect back with flash success
     */
    public function submitFormBannerHomepageDelete(BannerHomepageDeleteRequest $request)
    {
        $this->bannerhomepage->deleteDataApi($request->id);
        return redirect()->route('bannerhomepage.view')
            ->withFlashSuccess('delete bannerhomepage data success');
    }
}
