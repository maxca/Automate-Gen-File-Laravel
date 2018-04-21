<?php 
namespace App\Repository\OrdersPayment;

use App\Models\OrdersPayment\OrdersPayment;
use App\Repository\BaseRepository;
use App\Repository\OrdersPayment\OrdersPaymentInterface;

class OrdersPaymentRepository extends BaseRepository implements OrdersPaymentInterface
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
        return app()->make("App\Models\OrdersPayment\OrdersPaymentModel");
    }
    
   


}
