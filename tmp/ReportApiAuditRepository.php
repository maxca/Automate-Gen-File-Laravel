<?php 
namespace App\Repository\ReportApiAudit;

use App\Models\ReportApiAudit\ReportApiAudit;
use App\Repository\BaseRepository;
use App\Repository\ReportApiAudit\ReportApiAuditInterface;

class ReportApiAuditRepository extends BaseRepository implements ReportApiAuditInterface
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
        return app()->make("App\Models\ReportApiAudit\ReportApiAuditModel");
    }
    
    public function getReportApiAuditByID($id)
    {
        return $this->model->find($id);
    }
   


}
