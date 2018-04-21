<?php 
namespace App\Repository\OrdersShippingAddress;

use App\Models\OrdersShippingAddress\OrdersShippingAddress;
use App\Repository\BaseRepository;
use App\Repository\OrdersShippingAddress\OrdersShippingAddressInterface;

class OrdersShippingAddressRepository extends BaseRepository implements OrdersShippingAddressInterface
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
        return app()->make("App\Models\OrdersShippingAddress\OrdersShippingAddressModel");
    }
    
   


}
