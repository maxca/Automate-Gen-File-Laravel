<?php 
namespace App\Repository\Chats;

use App\Models\Chats\Chats;
use App\Repository\BaseRepository;
use App\Repository\Chats\ChatsInterface;

class ChatsRepository extends BaseRepository implements ChatsInterface
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
        return app()->make("App\Models\Chats\ChatsModel");
    }
    
   


}
