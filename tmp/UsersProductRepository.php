<?php 
namespace App\Repository\UsersProduct;

use App\Models\UsersProduct\UsersProduct;
use App\Repository\BaseRepository;
use App\Repository\UsersProduct\UsersProductInterface;

class UsersProductRepository extends BaseRepository implements UsersProductInterface
{
    /**
     * set limit
     * @var integer
     */
    protected $limit = 30;

    /**
     * set order by column
     * @var string
     */
    protected $orderBy = 'id';

    /**
     * set sort type
     * @var string
     */
    protected $sortType = 'desc';    

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
        return app()->make("App\Models\UsersProduct\UsersProductModel");
    }
    
    public function getUsersProductByID($id)
    {
        return $this->model->find($id);
    }
   


}
