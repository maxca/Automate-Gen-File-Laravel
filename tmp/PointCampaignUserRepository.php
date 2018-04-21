<?php 
namespace App\Repository\PointCampaignUser;

use App\Models\PointCampaignUser\PointCampaignUser;
use App\Repository\BaseRepository;
use App\Repository\PointCampaignUser\PointCampaignUserInterface;

class PointCampaignUserRepository extends BaseRepository implements PointCampaignUserInterface
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
        return app()->make("App\Models\PointCampaignUser\PointCampaignUserModel");
    }
    
    public function getPointCampaignUserByID($id)
    {
        return $this->model->find($id);
    }
   


}
