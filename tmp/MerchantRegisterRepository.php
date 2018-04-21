<?php 
namespace App\Repository\MerchantRegister;

use App\Models\MerchantRegister\MerchantRegister;
use App\Repository\BaseRepository;
use App\Repository\MerchantRegister\MerchantRegisterInterface;

class MerchantRegisterRepository extends BaseRepository implements MerchantRegisterInterface
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
        return app()->make("App\Models\MerchantRegister\MerchantRegisterModel");
    }
    
    public function getMerchantRegisterByID($id)
    {
        return $this->model->find($id);
    }
   


}
