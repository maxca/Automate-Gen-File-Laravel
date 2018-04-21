<?php 
namespace App\Repository\Payments;

use App\Models\Payments\Payments;
use App\Repository\BaseRepository;
use App\Repository\Payments\PaymentsInterface;

class PaymentsRepository extends BaseRepository implements PaymentsInterface
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
        return app()->make("App\Models\Payments\PaymentsModel");
    }
    
    public function getPaymentsByID($id)
    {
        return $this->model->find($id);
    }
   


}
