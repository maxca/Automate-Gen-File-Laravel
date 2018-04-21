<?php 
namespace App\Repository\AccountTransaction;

use App\Models\AccountTransaction\AccountTransaction;
use App\Repository\BaseRepository;
use App\Repository\AccountTransaction\AccountTransactionInterface;

class AccountTransactionRepository extends BaseRepository implements AccountTransactionInterface
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
        return app()->make("App\Models\AccountTransaction\AccountTransactionModel");
    }
    
    public function getAccountTransactionByID($id)
    {
        return $this->model->find($id);
    }
   


}
