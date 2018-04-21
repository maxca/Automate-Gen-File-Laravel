<?php 
namespace App\Repository\ShippopHistory;

use App\Models\ShippopHistory\ShippopHistory;
use App\Repository\BaseRepository;
use App\Repository\ShippopHistory\ShippopHistoryInterface;

class ShippopHistoryRepository extends BaseRepository implements ShippopHistoryInterface
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
        return app()->make("App\Models\ShippopHistory\ShippopHistoryModel");
    }
    
    public function getShippopHistoryByID($id)
    {
        return $this->model->find($id);
    }
   


}
