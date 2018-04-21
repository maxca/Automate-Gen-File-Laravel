<?php 
namespace App\Repository\Zipcode;

use App\Models\Zipcode\Zipcode;
use App\Repository\BaseRepository;
use App\Repository\Zipcode\ZipcodeInterface;

class ZipcodeRepository extends BaseRepository implements ZipcodeInterface
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
        return app()->make("App\Models\Zipcode\ZipcodeModel");
    }
    
    public function getZipcodeByID($id)
    {
        return $this->model->find($id);
    }
   


}
