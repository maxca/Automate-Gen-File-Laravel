<?php
namespace App\Http\Controllers\Reviews;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reviews\ReviewsRequest;
use App\Http\Requests\Reviews\ReviewsGetRequest;
use App\Http\Requests\Reviews\ReviewsCreateRequest;
use App\Http\Requests\Reviews\ReviewsUpdateRequest;
use App\Http\Requests\Reviews\ReviewsDeleteRequest;
use App\Repository\Reviews\ReviewsRepository;

class ReviewsController extends Controller
{

    protected $reviews;

    public function __construct(ReviewsRepository $reviews)
    {
        $this->reviews = $reviews;
    }
    public function createReviews(ReviewsCreateRequest $request)
    {
        $query = $this->reviews->createData($request->all());
        return response()->json($query); 
    }
    public function getReviewsList(ReviewsGetRequest $request)
    {
        $query = $this->reviews->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteReviews(ReviewsDeleteRequest $request)
    {   
        $query = $this->reviews->delete($request->all());
        return response()->json($query);
    }
    public function updateReviews(ReviewsUpdateRequest $request)
    {
        $query = $this->reviews->updateData($request->all());
        return response()->json($query);   
    }

}
