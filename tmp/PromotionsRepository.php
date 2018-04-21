<?php 
namespace App\Repository\Promotions;

use App\Models\Promotions\Promotions;
use App\Repository\BaseRepository;
use App\Repository\Promotions\PromotionsInterface;

class PromotionsRepository extends BaseRepository implements PromotionsInterface
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
        return app()->make("App\Models\Promotions\PromotionsModel");
    }
    
   


}
