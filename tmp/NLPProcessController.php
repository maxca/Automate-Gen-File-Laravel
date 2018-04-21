<?php
namespace App\Http\Controllers\NLPProcess;

use App\Http\Controllers\Controller;
use App\Http\Requests\NLPProcess\NLPProcessRequest;
use App\Http\Requests\NLPProcess\NLPProcessGetRequest;
use App\Http\Requests\NLPProcess\NLPProcessCreateRequest;
use App\Http\Requests\NLPProcess\NLPProcessUpdateRequest;
use App\Http\Requests\NLPProcess\NLPProcessDeleteRequest;
use App\Repository\NLPProcess\NLPProcessRepository;

class NLPProcessController extends Controller
{

    protected $nlpprocess;

    public function __construct(NLPProcessRepository $nlpprocess)
    {
        $this->nlpprocess = $nlpprocess;
    }
    public function createNLPProcess(NLPProcessCreateRequest $request)
    {
        $query = $this->nlpprocess->createData($request->all());
        return response()->json($query); 
    }
    public function getNLPProcessList(NLPProcessGetRequest $request)
    {
        $query = $this->nlpprocess->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteNLPProcess(NLPProcessDeleteRequest $request)
    {   
        $query = $this->nlpprocess->delete($request->all());
        return response()->json($query);
    }
    public function updateNLPProcess(NLPProcessUpdateRequest $request)
    {
        $query = $this->nlpprocess->updateData($request->all());
        return response()->json($query);   
    }

}
