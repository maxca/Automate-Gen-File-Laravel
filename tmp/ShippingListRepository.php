<?php 
namespace App\Repository\ShippingList;

use App\Models\ShippingList\ShippingList;
use App\Repository\BaseRepository;
use App\Repository\ShippingList\ShippingListInterface;

class ShippingListRepository extends BaseRepository implements ShippingListInterface
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
        return app()->make("App\Models\ShippingList\ShippingListModel");
    }
    
    public function getShippingListByID($id)
    {
        return $this->model->find($id);
    }
   


}
