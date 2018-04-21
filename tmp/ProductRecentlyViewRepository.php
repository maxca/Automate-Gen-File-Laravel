<?php 
namespace App\Repository\ProductRecentlyView;

use App\Models\ProductRecentlyView\ProductRecentlyView;
use App\Repository\BaseRepository;
use App\Repository\ProductRecentlyView\ProductRecentlyViewInterface;

class ProductRecentlyViewRepository extends BaseRepository implements ProductRecentlyViewInterface
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
        return app()->make("App\Models\ProductRecentlyView\ProductRecentlyViewModel");
    }
    
    public function getProductRecentlyViewByID($id)
    {
        return $this->model->find($id);
    }
   


}
