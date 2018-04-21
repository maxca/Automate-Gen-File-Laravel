<?php 
namespace App\Repository\;

use App\Models\\;
use App\Repository\BaseRepository;
use App\Repository\\Interface;

class Repository extends BaseRepository implements Interface
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
        return app()->make("App\Models\\Model");
    }
    
    public function getByID($id)
    {
        return $this->model->find($id);
    }
   


}
