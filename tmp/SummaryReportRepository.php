<?php 
namespace App\Repository\SummaryReport;

use App\Models\SummaryReport\SummaryReport;
use App\Repository\BaseRepository;
use App\Repository\SummaryReport\SummaryReportInterface;

class SummaryReportRepository extends BaseRepository implements SummaryReportInterface
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
        return app()->make("App\Models\SummaryReport\SummaryReportModel");
    }
    
    public function getSummaryReportByID($id)
    {
        return $this->model->find($id);
    }
   


}
