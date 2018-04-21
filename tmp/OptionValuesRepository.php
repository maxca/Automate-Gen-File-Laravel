<?php 
namespace App\Repository\OptionValues;

use App\Models\OptionValues\OptionValues;
use App\Repository\BaseRepository;
use App\Repository\OptionValues\OptionValuesInterface;

class OptionValuesRepository extends BaseRepository implements OptionValuesInterface
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
        return app()->make("App\Models\OptionValues\OptionValuesModel");
    }
    
    public function getOptionValuesByID($id)
    {
        return $this->model->find($id);
    }
   


}
