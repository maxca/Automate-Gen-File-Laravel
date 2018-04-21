<?php
namespace App\Http\Controllers\ProductRanking;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRanking\ProductRankingGetDetailViewRequest;
use App\Http\Requests\ProductRanking\ProductRankingGetEditViewRequest;
use App\Http\Requests\ProductRanking\ProductRankingGetViewRequest;
use App\Http\Requests\ProductRanking\ProductRankingPostCreateAjaxRequest;
use App\Http\Requests\ProductRanking\ProductRankingPostCreateRequest;
use App\Http\Requests\ProductRanking\ProductRankingPostDeleteAjaxRequest;
use App\Http\Requests\ProductRanking\ProductRankingPostDeleteRequest;
use App\Http\Requests\ProductRanking\ProductRankingPostUpdateAjaxRequest;
use App\Http\Requests\ProductRanking\ProductRankingPostUpdateRequest;
use App\Repository\ProductRanking\ProductRankingRepository;

class ProductRankingController extends Controller
{
    /**
     * productranking repository
     * @var object class
     */
    protected $productranking;

    public function __construct(ProductRankingRepository $productranking)
    {
        $this->productranking = $productranking;
    }

    /**
     * [getProductRankingListView]
     * @param  ProductRankingGetViewRequest $request [validation]
     * @return view object
     */
    public function getProductRankingListView()
    {
        return $this->productranking->getViewList();
    }

    /**
     * [getProductRankingDetailView]
     * @param  ProductRankingGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getProductRankingDetailView(ProductRankingGetDetailViewRequest $request)
    {
        return $this->productranking->getViewDetail($request->id);
    }

    /**
     * [getProductRankingEditView]
     * @param  ProductRankingGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getProductRankingEditView(ProductRankingGetEditViewRequest $request)
    {
        return $this->productranking->getViewEdit($request->id);
    }

    /**
     * [getProductRankingCreateView]
     * @return view object
     */
    public function getProductRankingCreateView()
    {
        return $this->productranking->getViewCreate();
    }

    /**
     * [postProductRankingCreate]
     * @param  ProductRankingPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postProductRankingCreate(ProductRankingPostCreateRequest $request)
    {
        $this->productranking->createData($request->all());
        return redirect()->route('product_ranking.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductRankingUpdate]
     * @param  ProductRankingPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postProductRankingUpdate(ProductRankingPostUpdateRequest $request)
    {
        $this->productranking->upadateData($request->all());
        return redirect()->route('product_ranking.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductRankingDelete]
     * @param  ProductRankingPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postProductRankingDelete(ProductRankingPostDeleteRequest $request)
    {
        $this->productranking->deleteData($request->id);
        return redirect()->route('product_ranking.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductRankingCreateAjax]
     * @param  ProductRankingPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductRankingCreateAjax(ProductRankingPostCreateAjaxRequest $request)
    {
        $response = $this->productranking->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postProductRankingUpdateAjax]
     * @param  ProductRankingPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductRankingUpdateAjax(ProductRankingPostUpdateAjaxRequest $request)
    {
        $response = $this->productranking->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postProductRankingDeleteAjax]
     * @param  ProductRankingPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductRankingDeleteAjax(ProductRankingPostDeleteAjaxRequest $request)
    {
        $response = $this->productranking->deleteData($request->id);
        return response()->json($response);
    }

}
