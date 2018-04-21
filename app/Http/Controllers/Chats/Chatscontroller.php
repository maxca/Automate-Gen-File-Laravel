<?php
namespace App\Http\Controllers\Chats;

use App\Http\Controllers\Controller;
use App\Http\Requests\Chats\ChatsRequest;
use App\Repositories\Chats\ChatsRepository;

class ChatsController extends Controller
{

    protected $Chats;
    protected $request;

    public function __construct(ChatsRepository $Chats)
    {
        $this->Chats = $Chats;
    }
    public function index(ChatsRequest $request)
    {
      
    }
    public function getList()
    {
        
    }
    public function delete()
    {
        
    }
    public function update()
    {
        
    }
}
