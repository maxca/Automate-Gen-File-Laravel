<?php 
namespace App\Repository\MerchantShipping;

use App\Models\MerchantShipping\MerchantShipping;
use App\Repository\BaseRepository;
use App\Repository\MerchantShipping\MerchantShippingInterface;

class MerchantShippingRepository extends BaseRepository implements MerchantShippingInterface
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
        return app()->make("App\Models\MerchantShipping\MerchantShippingModel");
    }
    
    public function getMerchantShippingByID($id)
    {
        return $this->model->find($id);
    }
   


}
