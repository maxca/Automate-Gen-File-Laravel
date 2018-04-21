<?php 
namespace App\Repository\Cart;

use App\Models\Cart\Cart;
use App\Repository\BaseRepository;
use App\Repository\Cart\CartInterface;

class CartRepository extends BaseRepository implements CartInterface
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
        return app()->make("App\Models\Cart\CartModel");
    }
    
    public function getCartByID($id)
    {
        return $this->model->find($id);
    }
   


}
