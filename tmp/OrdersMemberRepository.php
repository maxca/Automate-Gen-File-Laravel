<?php 
namespace App\Repository\OrdersMember;

use App\Models\OrdersMember\OrdersMember;
use App\Repository\BaseRepository;
use App\Repository\OrdersMember\OrdersMemberInterface;

class OrdersMemberRepository extends BaseRepository implements OrdersMemberInterface
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
        return app()->make("App\Models\OrdersMember\OrdersMemberModel");
    }
    
   


}
