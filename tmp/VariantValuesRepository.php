<?php 
namespace App\Repository\VariantValues;

use App\Models\VariantValues\VariantValues;
use App\Repository\BaseRepository;
use App\Repository\VariantValues\VariantValuesInterface;

class VariantValuesRepository extends BaseRepository implements VariantValuesInterface
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
        return app()->make("App\Models\VariantValues\VariantValuesModel");
    }
    
    public function getVariantValuesByID($id)
    {
        return $this->model->find($id);
    }
   


}
