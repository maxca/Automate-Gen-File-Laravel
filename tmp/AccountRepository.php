<?php 
namespace App\Repository\Account;

use App\Models\Account\Account;
use App\Repository\BaseRepository;
use App\Repository\Account\AccountInterface;

class AccountRepository extends BaseRepository implements AccountInterface
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
        return app()->make("App\Models\Account\AccountModel");
    }
    
    public function getAccountByID($id)
    {
        return $this->model->find($id);
    }
   


}
