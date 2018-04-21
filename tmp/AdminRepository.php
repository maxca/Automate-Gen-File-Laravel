<?php 
namespace App\Repository\Admin;

use App\Models\Admin\Admin;
use App\Repository\BaseRepository;
use App\Repository\Admin\AdminInterface;

class AdminRepository extends BaseRepository implements AdminInterface
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
        return app()->make("App\Models\Admin\AdminModel");
    }
    
    public function getAdminByID($id)
    {
        return $this->model->find($id);
    }
   


}
