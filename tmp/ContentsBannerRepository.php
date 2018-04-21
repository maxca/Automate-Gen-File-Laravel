<?php 
namespace App\Repository\ContentsBanner;

use App\Models\ContentsBanner\ContentsBanner;
use App\Repository\BaseRepository;
use App\Repository\ContentsBanner\ContentsBannerInterface;

class ContentsBannerRepository extends BaseRepository implements ContentsBannerInterface
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
        return app()->make("App\Models\ContentsBanner\ContentsBannerModel");
    }
    
    public function getContentsBannerByID($id)
    {
        return $this->model->find($id);
    }
   


}
