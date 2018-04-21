<?php 
namespace App\Repository\AuctionTrasaction;

use App\Models\AuctionTrasaction\AuctionTrasaction;
use App\Repository\BaseRepository;
use App\Repository\AuctionTrasaction\AuctionTrasactionInterface;

class AuctionTrasactionRepository extends BaseRepository implements AuctionTrasactionInterface
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
        return app()->make("App\Models\AuctionTrasaction\AuctionTrasactionModel");
    }
    
    public function getAuctionTrasactionByID($id)
    {
        return $this->model->find($id);
    }
   


}
