<?php 
namespace App\Repository\ClaimProduct;

use App\Models\ClaimProduct\ClaimProduct;
use App\Repository\BaseRepository;
use App\Repository\ClaimProduct\ClaimProductInterface;

class ClaimProductRepository extends BaseRepository implements ClaimProductInterface
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
        return app()->make("App\Models\ClaimProduct\ClaimProductModel");
    }
    
    public function getClaimProductByID($id)
    {
        return $this->model->find($id);
    }
   


}
