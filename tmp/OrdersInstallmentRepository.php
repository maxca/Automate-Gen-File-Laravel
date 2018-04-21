<?php 
namespace App\Repository\OrdersInstallment;

use App\Models\OrdersInstallment\OrdersInstallment;
use App\Repository\BaseRepository;
use App\Repository\OrdersInstallment\OrdersInstallmentInterface;

class OrdersInstallmentRepository extends BaseRepository implements OrdersInstallmentInterface
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
        return app()->make("App\Models\OrdersInstallment\OrdersInstallmentModel");
    }
    
   


}
