<?php
namespace App\Http\Controllers\InboxMessage;

use App\Http\Controllers\Controller;
use App\Http\Requests\InboxMessage\InboxMessageRequest;
use App\Http\Requests\InboxMessage\InboxMessageGetRequest;
use App\Http\Requests\InboxMessage\InboxMessageCreateRequest;
use App\Http\Requests\InboxMessage\InboxMessageUpdateRequest;
use App\Http\Requests\InboxMessage\InboxMessageDeleteRequest;
use App\Repository\InboxMessage\InboxMessageRepository;

class InboxMessageController extends Controller
{

    protected $inboxmessage;

    public function __construct(InboxMessageRepository $inboxmessage)
    {
        $this->inboxmessage = $inboxmessage;
    }
    public function createInboxMessage(InboxMessageCreateRequest $request)
    {
        $query = $this->inboxmessage->createData($request->all());
        return response()->json($query); 
    }
    public function getInboxMessageList(InboxMessageGetRequest $request)
    {
        $query = $this->inboxmessage->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteInboxMessage(InboxMessageDeleteRequest $request)
    {   
        $query = $this->inboxmessage->delete($request->all());
        return response()->json($query);
    }
    public function updateInboxMessage(InboxMessageUpdateRequest $request)
    {
        $query = $this->inboxmessage->updateData($request->all());
        return response()->json($query);   
    }

}
