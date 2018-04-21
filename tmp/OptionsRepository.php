<?php 
namespace App\Repository\Options;

use App\Models\Options\Options;
use App\Repository\BaseRepository;
use App\Repository\Options\OptionsInterface;

class OptionsRepository extends BaseRepository implements OptionsInterface
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
        return app()->make("App\Models\Options\OptionsModel");
    }
    
    public function getOptionsByID($id)
    {
        return $this->model->find($id);
    }
   


}
