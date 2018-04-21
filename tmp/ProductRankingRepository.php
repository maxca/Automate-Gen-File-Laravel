<?php 
namespace App\Repository\ProductRanking;

use App\Models\ProductRanking\ProductRanking;
use App\Repository\BaseRepository;
use App\Repository\ProductRanking\ProductRankingInterface;

class ProductRankingRepository extends BaseRepository implements ProductRankingInterface
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
        return app()->make("App\Models\ProductRanking\ProductRankingModel");
    }
    
    public function getProductRankingByID($id)
    {
        return $this->model->find($id);
    }
   


}
