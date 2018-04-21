<?php
namespace App\Http\Controllers\ContentsBanner;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentsBanner\ContentsBannerRequest;
use App\Http\Requests\ContentsBanner\ContentsBannerGetRequest;
use App\Http\Requests\ContentsBanner\ContentsBannerCreateRequest;
use App\Http\Requests\ContentsBanner\ContentsBannerUpdateRequest;
use App\Http\Requests\ContentsBanner\ContentsBannerDeleteRequest;
use App\Repository\ContentsBanner\ContentsBannerRepository;

class ContentsBannerController extends Controller
{

    protected $contentsbanner;

    public function __construct(ContentsBannerRepository $contentsbanner)
    {
        $this->contentsbanner = $contentsbanner;
    }
    public function createContentsBanner(ContentsBannerCreateRequest $request)
    {
        $query = $this->contentsbanner->createData($request->all());
        return response()->json($query); 
    }
    public function getContentsBannerList(ContentsBannerGetRequest $request)
    {
        $query = $this->contentsbanner->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteContentsBanner(ContentsBannerDeleteRequest $request)
    {   
        $query = $this->contentsbanner->delete($request->all());
        return response()->json($query);
    }
    public function updateContentsBanner(ContentsBannerUpdateRequest $request)
    {
        $query = $this->contentsbanner->updateData($request->all());
        return response()->json($query);   
    }

}
