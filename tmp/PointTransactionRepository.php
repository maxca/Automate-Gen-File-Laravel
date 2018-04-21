<?php 
namespace App\Repository\PointTransaction;

use App\Models\PointTransaction\PointTransaction;
use App\Repository\BaseRepository;
use App\Repository\PointTransaction\PointTransactionInterface;

class PointTransactionRepository extends BaseRepository implements PointTransactionInterface
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
        return app()->make("App\Models\PointTransaction\PointTransactionModel");
    }
    
    public function getPointTransactionByID($id)
    {
        return $this->model->find($id);
    }
   


}
