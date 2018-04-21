<?php 
namespace App\Repository\Chat2;

use App\Models\Chat2\Chat2;
use App\Repository\BaseRepository;
use App\Repository\Chat2\Chat2Interface;

class Chat2Repository extends BaseRepository implements Chat2Interface
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
        return app()->make("App\Models\Chat2\Chat2Model");
    }
    
   


}
