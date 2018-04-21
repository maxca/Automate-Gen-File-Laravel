<?php 
namespace App\Repository\ProductVariants;

use App\Models\ProductVariants\ProductVariants;
use App\Repository\BaseRepository;
use App\Repository\ProductVariants\ProductVariantsInterface;

class ProductVariantsRepository extends BaseRepository implements ProductVariantsInterface
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
        return app()->make("App\Models\ProductVariants\ProductVariantsModel");
    }
    
    public function getProductVariantsByID($id)
    {
        return $this->model->find($id);
    }
   


}
