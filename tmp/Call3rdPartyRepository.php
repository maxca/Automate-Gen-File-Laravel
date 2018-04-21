<?php 
namespace App\Repository\Call3rdParty;

use App\Models\Call3rdParty\Call3rdParty;
use App\Repository\BaseRepository;
use App\Repository\Call3rdParty\Call3rdPartyInterface;

class Call3rdPartyRepository extends BaseRepository implements Call3rdPartyInterface
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
        return app()->make("App\Models\Call3rdParty\Call3rdPartyModel");
    }
    
   


}
