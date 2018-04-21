<?php 
namespace App\Repository\Merchant;

use App\Models\Merchant\Merchant;
use App\Repository\BaseRepository;
use App\Repository\Merchant\MerchantInterface;

class MerchantRepository extends BaseRepository implements MerchantInterface
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
        return app()->make("App\Models\Merchant\MerchantModel");
    }
    
    public function getMerchantByID($id)
    {
        return $this->model->find($id);
    }
   


}
