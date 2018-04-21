<?php 
namespace App\Repository\User;

use App\Models\User\User;
use App\Repository\BaseRepository;
use App\Repository\User\UserInterface;

class UserRepository extends BaseRepository implements UserInterface
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
        return app()->make("App\Models\User\UserModel");
    }
    
   


}
