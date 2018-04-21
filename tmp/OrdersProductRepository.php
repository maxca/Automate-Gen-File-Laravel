<?php 
namespace App\Repository\OrdersProduct;

use App\Models\OrdersProduct\OrdersProduct;
use App\Repository\BaseRepository;
use App\Repository\OrdersProduct\OrdersProductInterface;

class OrdersProductRepository extends BaseRepository implements OrdersProductInterface
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
        return app()->make("App\Models\OrdersProduct\OrdersProductModel");
    }
    
   


}
