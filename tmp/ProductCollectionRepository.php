<?php 
namespace App\Repository\ProductCollection;

use App\Models\ProductCollection\ProductCollection;
use App\Repository\BaseRepository;
use App\Repository\ProductCollection\ProductCollectionInterface;

class ProductCollectionRepository extends BaseRepository implements ProductCollectionInterface
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
        return app()->make("App\Models\ProductCollection\ProductCollectionModel");
    }
    
   


}
