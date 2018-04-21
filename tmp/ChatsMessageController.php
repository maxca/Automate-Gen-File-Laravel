<?php
namespace App\Http\Controllers\ChatsMessage;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChatsMessage\ChatsMessageRequest;
use App\Http\Requests\ChatsMessage\ChatsMessageGetRequest;
use App\Http\Requests\ChatsMessage\ChatsMessageCreateRequest;
use App\Http\Requests\ChatsMessage\ChatsMessageUpdateRequest;
use App\Http\Requests\ChatsMessage\ChatsMessageDeleteRequest;
use App\Repository\ChatsMessage\ChatsMessageRepository;

class ChatsMessageController extends Controller
{

    protected $chatsmessage;

    public function __construct(ChatsMessageRepository $chatsmessage)
    {
        $this->chatsmessage = $chatsmessage;
    }
    public function createChatsMessage(ChatsMessageCreateRequest $request)
    {
        $query = $this->chatsmessage->createData($request->all());
        return response()->json($query); 
    }
    public function getChatsMessageList(ChatsMessageGetRequest $request)
    {
        $query = $this->chatsmessage->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteChatsMessage(ChatsMessageDeleteRequest $request)
    {   
        $query = $this->chatsmessage->delete($request->all());
        return response()->json($query);
    }
    public function updateChatsMessage(ChatsMessageUpdateRequest $request)
    {
        $query = $this->chatsmessage->updateData($request->all());
        return response()->json($query);   
    }

}
