<?php 
namespace App\Repository\ChatsMessage;

use App\Models\ChatsMessage\ChatsMessage;
use App\Repository\BaseRepository;
use App\Repository\ChatsMessage\ChatsMessageInterface;

class ChatsMessageRepository extends BaseRepository implements ChatsMessageInterface
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
        return app()->make("App\Models\ChatsMessage\ChatsMessageModel");
    }
    
    public function getChatsMessageByID($id)
    {
        return $this->model->find($id);
    }
   


}
