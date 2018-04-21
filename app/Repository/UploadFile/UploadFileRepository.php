<?php 
namespace App\Repository\UploadFile;

use App\Models\UploadFile\UploadFile;
use App\Repository\BaseRepository;
use App\Repository\UploadFile\UploadFileInterface;

class UploadFileRepository extends BaseRepository implements UploadFileInterface
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
        return app()->make("App\Models\UploadFile\UploadFileModel");
    }
    
    public function getUploadFileByID($id)
    {
        return $this->model->find($id);
    }
   


}
