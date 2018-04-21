<?php 
namespace App\Repository\ShippopTransaction;

use App\Models\ShippopTransaction\ShippopTransaction;
use App\Repository\BaseRepository;
use App\Repository\ShippopTransaction\ShippopTransactionInterface;

class ShippopTransactionRepository extends BaseRepository implements ShippopTransactionInterface
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
        return app()->make("App\Models\ShippopTransaction\ShippopTransactionModel");
    }
    
    public function getShippopTransactionByID($id)
    {
        return $this->model->find($id);
    }
   


}
