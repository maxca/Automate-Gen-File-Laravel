<?php 
namespace App\Repository\AuthJWT;

use App\Models\AuthJWT\AuthJWT;
use App\Repository\BaseRepository;
use App\Repository\AuthJWT\AuthJWTInterface;

class AuthJWTRepository extends BaseRepository implements AuthJWTInterface
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
        return app()->make("App\Models\AuthJWT\AuthJWTModel");
    }
    
   


}
