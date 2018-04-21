<?php 
namespace App\Repository\ConfirmPayment;

use App\Models\ConfirmPayment\ConfirmPayment;
use App\Repository\BaseRepository;
use App\Repository\ConfirmPayment\ConfirmPaymentInterface;

class ConfirmPaymentRepository extends BaseRepository implements ConfirmPaymentInterface
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
        return app()->make("App\Models\ConfirmPayment\ConfirmPaymentModel");
    }
    
    public function getConfirmPaymentByID($id)
    {
        return $this->model->find($id);
    }
   


}
