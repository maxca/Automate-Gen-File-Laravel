<?php 
namespace App\Repository\AuctionExtraBid;

use App\Models\AuctionExtraBid\AuctionExtraBid;
use App\Repository\BaseRepository;
use App\Repository\AuctionExtraBid\AuctionExtraBidInterface;

class AuctionExtraBidRepository extends BaseRepository implements AuctionExtraBidInterface
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
        return app()->make("App\Models\AuctionExtraBid\AuctionExtraBidModel");
    }
    
    public function getAuctionExtraBidByID($id)
    {
        return $this->model->find($id);
    }
   


}
