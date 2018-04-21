<?php 
namespace App\Repository\ProductWishlist;

use App\Models\ProductWishlist\ProductWishlist;
use App\Repository\BaseRepository;
use App\Repository\ProductWishlist\ProductWishlistInterface;

class ProductWishlistRepository extends BaseRepository implements ProductWishlistInterface
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
        return app()->make("App\Models\ProductWishlist\ProductWishlistModel");
    }
    
   


}
