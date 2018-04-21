<?php 
namespace App\Repository\CuttingWord;

use App\Models\CuttingWord\CuttingWord;
use App\Repository\BaseRepository;
use App\Repository\CuttingWord\CuttingWordInterface;

class CuttingWordRepository extends BaseRepository implements CuttingWordInterface
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
        return app()->make("App\Models\CuttingWord\CuttingWordModel");
    }
    
    public function getCuttingWordByID($id)
    {
        return $this->model->find($id);
    }
   


}
