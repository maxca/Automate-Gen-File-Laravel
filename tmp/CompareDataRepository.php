<?php 
namespace App\Repository\CompareData;

use App\Models\CompareData\CompareData;
use App\Repository\BaseRepository;
use App\Repository\CompareData\CompareDataInterface;

class CompareDataRepository extends BaseRepository implements CompareDataInterface
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
        return app()->make("App\Models\CompareData\CompareDataModel");
    }
    
    public function getCompareDataByID($id)
    {
        return $this->model->find($id);
    }
   


}
