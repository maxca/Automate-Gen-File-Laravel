<?php 
namespace App\Repository\OptionProductStock;

use App\Models\OptionProductStock\OptionProductStock;
use App\Repository\BaseRepository;
use App\Repository\OptionProductStock\OptionProductStockInterface;

class OptionProductStockRepository extends BaseRepository implements OptionProductStockInterface
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
        return app()->make("App\Models\OptionProductStock\OptionProductStockModel");
    }
    
    public function getOptionProductStockByID($id)
    {
        return $this->model->find($id);
    }
   


}
