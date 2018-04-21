<?php
namespace App\Http\Controllers\ShopRanking;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShopRanking\ShopRankingGetDetailViewRequest;
use App\Http\Requests\ShopRanking\ShopRankingGetEditViewRequest;
use App\Http\Requests\ShopRanking\ShopRankingGetViewRequest;
use App\Http\Requests\ShopRanking\ShopRankingPostCreateAjaxRequest;
use App\Http\Requests\ShopRanking\ShopRankingPostCreateRequest;
use App\Http\Requests\ShopRanking\ShopRankingPostDeleteAjaxRequest;
use App\Http\Requests\ShopRanking\ShopRankingPostDeleteRequest;
use App\Http\Requests\ShopRanking\ShopRankingPostUpdateAjaxRequest;
use App\Http\Requests\ShopRanking\ShopRankingPostUpdateRequest;
use App\Repository\ShopRanking\ShopRankingRepository;

class ShopRankingController extends Controller
{
    /**
     * shopranking repository
     * @var object class
     */
    protected $shopranking;

    public function __construct(ShopRankingRepository $shopranking)
    {
        $this->shopranking = $shopranking;
    }

    /**
     * [getShopRankingListView]
     * @param  ShopRankingGetViewRequest $request [validation]
     * @return view object
     */
    public function getShopRankingListView()
    {
        return $this->shopranking->getViewList();
    }

    /**
     * [getShopRankingDetailView]
     * @param  ShopRankingGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getShopRankingDetailView(ShopRankingGetDetailViewRequest $request)
    {
        return $this->shopranking->getViewDetail($request->id);
    }

    /**
     * [getShopRankingEditView]
     * @param  ShopRankingGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getShopRankingEditView(ShopRankingGetEditViewRequest $request)
    {
        return $this->shopranking->getViewEdit($request->id);
    }

    /**
     * [getShopRankingCreateView]
     * @return view object
     */
    public function getShopRankingCreateView()
    {
        return $this->shopranking->getViewCreate();
    }

    /**
     * [postShopRankingCreate]
     * @param  ShopRankingPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postShopRankingCreate(ShopRankingPostCreateRequest $request)
    {
        $this->shopranking->createData($request->all());
        return redirect()->route('shop_ranking.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postShopRankingUpdate]
     * @param  ShopRankingPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postShopRankingUpdate(ShopRankingPostUpdateRequest $request)
    {
        $this->shopranking->upadateData($request->all());
        return redirect()->route('shop_ranking.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postShopRankingDelete]
     * @param  ShopRankingPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postShopRankingDelete(ShopRankingPostDeleteRequest $request)
    {
        $this->shopranking->deleteData($request->id);
        return redirect()->route('shop_ranking.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postShopRankingCreateAjax]
     * @param  ShopRankingPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postShopRankingCreateAjax(ShopRankingPostCreateAjaxRequest $request)
    {
        $response = $this->shopranking->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postShopRankingUpdateAjax]
     * @param  ShopRankingPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postShopRankingUpdateAjax(ShopRankingPostUpdateAjaxRequest $request)
    {
        $response = $this->shopranking->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postShopRankingDeleteAjax]
     * @param  ShopRankingPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postShopRankingDeleteAjax(ShopRankingPostDeleteAjaxRequest $request)
    {
        $response = $this->shopranking->deleteData($request->id);
        return response()->json($response);
    }

}
