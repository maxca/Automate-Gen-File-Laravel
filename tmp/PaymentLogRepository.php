<?php 
namespace App\Repository\PaymentLog;

use App\Models\PaymentLog\PaymentLog;
use App\Repository\BaseRepository;
use App\Repository\PaymentLog\PaymentLogInterface;

class PaymentLogRepository extends BaseRepository implements PaymentLogInterface
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
        return app()->make("App\Models\PaymentLog\PaymentLogModel");
    }
    
    public function getPaymentLogByID($id)
    {
        return $this->model->find($id);
    }
   


}
