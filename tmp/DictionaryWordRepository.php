<?php 
namespace App\Repository\DictionaryWord;

use App\Models\DictionaryWord\DictionaryWord;
use App\Repository\BaseRepository;
use App\Repository\DictionaryWord\DictionaryWordInterface;

class DictionaryWordRepository extends BaseRepository implements DictionaryWordInterface
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
        return app()->make("App\Models\DictionaryWord\DictionaryWordModel");
    }
    
    public function getDictionaryWordByID($id)
    {
        return $this->model->find($id);
    }
   


}
