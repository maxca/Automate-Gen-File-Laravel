<?php 
namespace App\Repository\Category;

use App\Models\Category\Category;
use App\Repository\BaseRepository;
use App\Repository\Category\CategoryInterface;

class CategoryRepository extends BaseRepository implements CategoryInterface
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
        return app()->make("App\Models\Category\CategoryModel");
    }
    
   


}
