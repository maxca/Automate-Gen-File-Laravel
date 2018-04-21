<?php 
namespace App\Repository\PackageShop;

use App\Models\PackageShop\PackageShop;
use App\Repository\BaseRepository;
use App\Repository\PackageShop\PackageShopInterface;

class PackageShopRepository extends BaseRepository implements PackageShopInterface
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
        return app()->make("App\Models\PackageShop\PackageShopModel");
    }
    
    public function getPackageShopByID($id)
    {
        return $this->model->find($id);
    }
   


}
