<?php 
namespace App\Repository\Callback2c2p;

use App\Models\Callback2c2p\Callback2c2p;
use App\Repository\BaseRepository;
use App\Repository\Callback2c2p\Callback2c2pInterface;

class Callback2c2pRepository extends BaseRepository implements Callback2c2pInterface
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
        return app()->make("App\Models\Callback2c2p\Callback2c2pModel");
    }
    
    public function getCallback2c2pByID($id)
    {
        return $this->model->find($id);
    }
   


}
