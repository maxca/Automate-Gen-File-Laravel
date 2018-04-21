<?php 
namespace App\Repository\PointCampaign;

use App\Models\PointCampaign\PointCampaign;
use App\Repository\BaseRepository;
use App\Repository\PointCampaign\PointCampaignInterface;

class PointCampaignRepository extends BaseRepository implements PointCampaignInterface
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
        return app()->make("App\Models\PointCampaign\PointCampaignModel");
    }
    
    public function getPointCampaignByID($id)
    {
        return $this->model->find($id);
    }
   


}
