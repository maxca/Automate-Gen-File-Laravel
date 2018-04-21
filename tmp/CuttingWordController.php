<?php
namespace App\Http\Controllers\CuttingWord;

use App\Http\Controllers\Controller;
use App\Http\Requests\CuttingWord\CuttingWordRequest;
use App\Http\Requests\CuttingWord\CuttingWordGetRequest;
use App\Http\Requests\CuttingWord\CuttingWordCreateRequest;
use App\Http\Requests\CuttingWord\CuttingWordUpdateRequest;
use App\Http\Requests\CuttingWord\CuttingWordDeleteRequest;
use App\Repository\CuttingWord\CuttingWordRepository;

class CuttingWordController extends Controller
{

    protected $cuttingword;

    public function __construct(CuttingWordRepository $cuttingword)
    {
        $this->cuttingword = $cuttingword;
    }
    public function createCuttingWord(CuttingWordCreateRequest $request)
    {
        $query = $this->cuttingword->createData($request->all());
        return response()->json($query); 
    }
    public function getCuttingWordList(CuttingWordGetRequest $request)
    {
        $query = $this->cuttingword->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteCuttingWord(CuttingWordDeleteRequest $request)
    {   
        $query = $this->cuttingword->delete($request->all());
        return response()->json($query);
    }
    public function updateCuttingWord(CuttingWordUpdateRequest $request)
    {
        $query = $this->cuttingword->updateData($request->all());
        return response()->json($query);   
    }

}
