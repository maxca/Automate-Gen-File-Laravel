<?php 
namespace App\Repository\Marks;

use App\Models\Marks\Marks;
use App\Repository\BaseRepository;
use App\Repository\Marks\MarksInterface;

class MarksRepository extends BaseRepository implements MarksInterface
{

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
        return app()->make("App\Models\Marks\MarksModel");
    }
    
   


}
