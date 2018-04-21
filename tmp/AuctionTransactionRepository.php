<?php 
namespace App\Repository\AuctionTransaction;

use App\Models\AuctionTransaction\AuctionTransaction;
use App\Repository\BaseRepository;
use App\Repository\AuctionTransaction\AuctionTransactionInterface;

class AuctionTransactionRepository extends BaseRepository implements AuctionTransactionInterface
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
        return app()->make("App\Models\AuctionTransaction\AuctionTransactionModel");
    }
    
    public function getAuctionTransactionByID($id)
    {
        return $this->model->find($id);
    }
   


}
