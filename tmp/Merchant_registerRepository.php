<?php 
namespace App\Repository\Merchant_register;

use App\Models\Merchant_register\Merchant_register;
use App\Repository\BaseRepository;
use App\Repository\Merchant_register\Merchant_registerInterface;

class Merchant_registerRepository extends BaseRepository implements Merchant_registerInterface
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
        return app()->make("App\Models\Merchant_register\Merchant_registerModel");
    }
    
    public function getMerchant_registerByID($id)
    {
        return $this->model->find($id);
    }
   


}
