<?php 
namespace App\Repository\beer;

use App\Models\beer\beer;
use App\Repository\BaseRepository;
use App\Repository\beer\beerInterface;

class beerRepository extends BaseRepository implements beerInterface
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
        return app()->make("App\Models\beer\beerModel");
    }
    
   


}
