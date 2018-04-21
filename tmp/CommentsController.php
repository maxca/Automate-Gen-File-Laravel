<?php
namespace App\Http\Controllers\Comments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comments\CommentsRequest;
use App\Http\Requests\Comments\CommentsGetRequest;
use App\Http\Requests\Comments\CommentsCreateRequest;
use App\Http\Requests\Comments\CommentsUpdateRequest;
use App\Http\Requests\Comments\CommentsDeleteRequest;
use App\Repository\Comments\CommentsRepository;

class CommentsController extends Controller
{

    protected $comments;

    public function __construct(CommentsRepository $comments)
    {
        $this->comments = $comments;
    }
    public function createComments(CommentsCreateRequest $request)
    {
        $query = $this->comments->createData($request->all());
        return response()->json($query); 
    }
    public function getCommentsList(CommentsGetRequest $request)
    {
        $query = $this->comments->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteComments(CommentsDeleteRequest $request)
    {   
        $query = $this->comments->delete($request->all());
        return response()->json($query);
    }
    public function updateComments(CommentsUpdateRequest $request)
    {
        $query = $this->comments->updateData($request->all());
        return response()->json($query);   
    }

}
