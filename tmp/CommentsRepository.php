<?php 
namespace App\Repository\Comments;

use App\Models\Comments\Comments;
use App\Repository\BaseRepository;
use App\Repository\Comments\CommentsInterface;

class CommentsRepository extends BaseRepository implements CommentsInterface
{

    public function __construct()
    {
        parent::__construct();
        $this->model = $this->models();
    }
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function models()
    {
        return app()->make("App\Models\Comments\CommentsModel");
    }
    
    public function getCommentsByID($id)
    {
        return $this->model->find($id);
    }
   


}
