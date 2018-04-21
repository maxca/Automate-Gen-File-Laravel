<?php 
namespace App\Repository\{replace};

use App\Models\{replace}\{replace};
use App\Repository\BaseRepository;
use App\Repository\{replace}\{replace}Interface;

class {replace}Repository extends BaseRepository implements {replace}Interface
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
        return app()->make("App\Models\{replace}\{replace}Model");
    }
    
    public function get{replace}ByID($id)
    {
        return $this->model->find($id);
    }
   


}
