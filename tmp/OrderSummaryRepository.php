<?php 
namespace App\Repository\OrderSummary;

use App\Models\OrderSummary\OrderSummary;
use App\Repository\BaseRepository;
use App\Repository\OrderSummary\OrderSummaryInterface;

class OrderSummaryRepository extends BaseRepository implements OrderSummaryInterface
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
        return app()->make("App\Models\OrderSummary\OrderSummaryModel");
    }
    
    public function getOrderSummaryByID($id)
    {
        return $this->model->find($id);
    }
   


}
