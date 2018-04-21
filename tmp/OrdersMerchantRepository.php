<?php 
namespace App\Repository\OrdersMerchant;

use App\Models\OrdersMerchant\OrdersMerchant;
use App\Repository\BaseRepository;
use App\Repository\OrdersMerchant\OrdersMerchantInterface;

class OrdersMerchantRepository extends BaseRepository implements OrdersMerchantInterface
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
        return app()->make("App\Models\OrdersMerchant\OrdersMerchantModel");
    }
    
    public function getOrdersMerchantByID($id)
    {
        return $this->model->find($id);
    }
   


}
