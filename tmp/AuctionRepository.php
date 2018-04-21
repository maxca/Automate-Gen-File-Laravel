<?php 
namespace App\Repository\Auction;

use App\Models\Auction\Auction;
use App\Repository\BaseRepository;
use App\Repository\Auction\AuctionInterface;

class AuctionRepository extends BaseRepository implements AuctionInterface
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
        return app()->make("App\Models\Auction\AuctionModel");
    }
    
    public function getAuctionByID($id)
    {
        return $this->model->find($id);
    }
   


}
