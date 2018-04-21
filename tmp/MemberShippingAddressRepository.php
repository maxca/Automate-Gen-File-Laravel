<?php 
namespace App\Repository\MemberShippingAddress;

use App\Models\MemberShippingAddress\MemberShippingAddress;
use App\Repository\BaseRepository;
use App\Repository\MemberShippingAddress\MemberShippingAddressInterface;

class MemberShippingAddressRepository extends BaseRepository implements MemberShippingAddressInterface
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
        return app()->make("App\Models\MemberShippingAddress\MemberShippingAddressModel");
    }
    
    public function getMemberShippingAddressByID($id)
    {
        return $this->model->find($id);
    }
   


}
