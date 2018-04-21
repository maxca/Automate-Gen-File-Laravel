<?php 
namespace App\Repository\Dictionary;

use App\Models\Dictionary\Dictionary;
use App\Repository\BaseRepository;
use App\Repository\Dictionary\DictionaryInterface;

class DictionaryRepository extends BaseRepository implements DictionaryInterface
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
        return app()->make("App\Models\Dictionary\DictionaryModel");
    }
    
    public function getDictionaryByID($id)
    {
        return $this->model->find($id);
    }
   


}
