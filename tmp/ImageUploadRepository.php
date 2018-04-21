<?php 
namespace App\Repository\ImageUpload;

use App\Models\ImageUpload\ImageUpload;
use App\Repository\BaseRepository;
use App\Repository\ImageUpload\ImageUploadInterface;

class ImageUploadRepository extends BaseRepository implements ImageUploadInterface
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
        return app()->make("App\Models\ImageUpload\ImageUploadModel");
    }
    
   


}
