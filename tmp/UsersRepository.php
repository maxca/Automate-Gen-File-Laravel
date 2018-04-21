<?php 
namespace App\Repository\Users;

use App\Models\Users\Users;
use App\Repository\BaseRepository;
use App\Repository\Users\UsersInterface;

class UsersRepository extends BaseRepository implements UsersInterface
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
        return app()->make("App\Models\Users\UsersModel");
    }
    
    public function getUsersByID($id)
    {
        return $this->model->find($id);
    }
   


}
