<?php 
namespace App\Repository\NLPProcess;

use App\Models\NLPProcess\NLPProcess;
use App\Repository\BaseRepository;
use App\Repository\NLPProcess\NLPProcessInterface;

class NLPProcessRepository extends BaseRepository implements NLPProcessInterface
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
        return app()->make("App\Models\NLPProcess\NLPProcessModel");
    }
    
    public function getNLPProcessByID($id)
    {
        return $this->model->find($id);
    }
   


}
