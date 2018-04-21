<?php 
namespace App\Repository\ServiceDesk;

use App\Models\ServiceDesk\ServiceDesk;
use App\Repository\BaseRepository;
use App\Repository\ServiceDesk\ServiceDeskInterface;

class ServiceDeskRepository extends BaseRepository implements ServiceDeskInterface
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
        return app()->make("App\Models\ServiceDesk\ServiceDeskModel");
    }
    
    public function getServiceDeskByID($id)
    {
        return $this->model->find($id);
    }
   


}
