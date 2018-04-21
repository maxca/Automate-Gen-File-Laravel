<?php 
namespace App\Repository\OrdersBillingAddress;

use App\Models\OrdersBillingAddress\OrdersBillingAddress;
use App\Repository\BaseRepository;
use App\Repository\OrdersBillingAddress\OrdersBillingAddressInterface;

class OrdersBillingAddressRepository extends BaseRepository implements OrdersBillingAddressInterface
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
        return app()->make("App\Models\OrdersBillingAddress\OrdersBillingAddressModel");
    }
    
   


}
