<?php 
namespace App\Repository\InboxMessage;

use App\Models\InboxMessage\InboxMessage;
use App\Repository\BaseRepository;
use App\Repository\InboxMessage\InboxMessageInterface;

class InboxMessageRepository extends BaseRepository implements InboxMessageInterface
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
        return app()->make("App\Models\InboxMessage\InboxMessageModel");
    }
    
    public function getInboxMessageByID($id)
    {
        return $this->model->find($id);
    }
   


}
