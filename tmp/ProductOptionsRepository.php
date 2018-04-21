<?php 
namespace App\Repository\ProductOptions;

use App\Models\ProductOptions\ProductOptions;
use App\Repository\BaseRepository;
use App\Repository\ProductOptions\ProductOptionsInterface;

class ProductOptionsRepository extends BaseRepository implements ProductOptionsInterface
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
        return app()->make("App\Models\ProductOptions\ProductOptionsModel");
    }
    
    public function getProductOptionsByID($id)
    {
        return $this->model->find($id);
    }
   


}
