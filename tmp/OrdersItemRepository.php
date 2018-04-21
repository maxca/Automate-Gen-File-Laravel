<?php 
namespace App\Repository\OrdersItem;

use App\Models\OrdersItem\OrdersItem;
use App\Repository\BaseRepository;
use App\Repository\OrdersItem\OrdersItemInterface;

class OrdersItemRepository extends BaseRepository implements OrdersItemInterface
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
        return app()->make("App\Models\OrdersItem\OrdersItemModel");
    }
    
    public function getOrdersItemByID($id)
    {
        return $this->model->find($id);
    }
   


}
