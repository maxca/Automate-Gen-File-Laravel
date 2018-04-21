<?php 
namespace App\Repository\MerchantPackage;

use App\Models\MerchantPackage\MerchantPackage;
use App\Repository\BaseRepository;
use App\Repository\MerchantPackage\MerchantPackageInterface;

class MerchantPackageRepository extends BaseRepository implements MerchantPackageInterface
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
        return app()->make("App\Models\MerchantPackage\MerchantPackageModel");
    }
    
    public function getMerchantPackageByID($id)
    {
        return $this->model->find($id);
    }
   


}
