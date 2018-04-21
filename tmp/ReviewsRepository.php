<?php 
namespace App\Repository\Reviews;

use App\Models\Reviews\Reviews;
use App\Repository\BaseRepository;
use App\Repository\Reviews\ReviewsInterface;

class ReviewsRepository extends BaseRepository implements ReviewsInterface
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
        return app()->make("App\Models\Reviews\ReviewsModel");
    }
    
    public function getReviewsByID($id)
    {
        return $this->model->find($id);
    }
   


}
