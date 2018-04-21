<?php 
namespace App\Repository\ShopRanking;

use App\Models\ShopRanking\ShopRanking;
use App\Repository\BaseRepository;
use App\Repository\ShopRanking\ShopRankingInterface;

class ShopRankingRepository extends BaseRepository implements ShopRankingInterface
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
        return app()->make("App\Models\ShopRanking\ShopRankingModel");
    }
    
    public function getShopRankingByID($id)
    {
        return $this->model->find($id);
    }
   


}
