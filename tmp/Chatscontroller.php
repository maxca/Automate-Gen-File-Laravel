<?php
namespace App\Http\Controllers\Chats;

use App\Http\Controllers\Controller;
use App\Http\Requests\Chats\ChatsRequest;
use App\Http\Requests\Chats\ChatsGetRequest;
use App\Http\Requests\Chats\ChatsCreateRequest;
use App\Http\Requests\Chats\ChatsUpdateRequest;
use App\Http\Requests\Chats\ChatsDeleteRequest;
use App\Repository\Chats\ChatsRepository;

class ChatsController extends Controller
{

    protected $chats;

    public function __construct(ChatsRepository $chats)
    {
        $this->chats = $chats;
    }
    public function createChats(ChatsCreateRequest $request)
    {
        $query = $this->chats->createData($request->all());
        return response()->json($query); 
    }
    public function getChatsList(ChatsGetRequest $request)
    {
        $query = $this->chats->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteChats(ChatsDeleteRequest $request)
    {   
        $query = $this->chats->delete($request->all());
        return response()->json($query);
    }
    public function updateChats(ChatsUpdateRequest $request)
    {
        $query = $this->chats->updateData($request->all());
        return response()->json($query);   
    }

}
