<?php 
namespace App\Repository\Wishlist;

use App\Models\Wishlist\Wishlist;
use App\Repository\BaseRepository;
use App\Repository\Wishlist\WishlistInterface;

class WishlistRepository extends BaseRepository implements WishlistInterface
{
    /**
     * set limit
     * @var integer
     */
    protected $limit = 30;

    /**
     * set order by column
     * @var string
     */
    protected $orderBy = 'id';

    /**
     * set sort type
     * @var string
     */
    protected $sortType = 'desc';    

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
        return app()->make("App\Models\Wishlist\WishlistModel");
    }
    
    public function getWishlistByID($id)
    {
        return $this->model->find($id);
    }
   


}
