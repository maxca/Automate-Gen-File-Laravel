<?php
namespace App\Http\Controllers\DictionaryWord;

use App\Http\Controllers\Controller;
use App\Http\Requests\DictionaryWord\DictionaryWordRequest;
use App\Http\Requests\DictionaryWord\DictionaryWordGetRequest;
use App\Http\Requests\DictionaryWord\DictionaryWordCreateRequest;
use App\Http\Requests\DictionaryWord\DictionaryWordUpdateRequest;
use App\Http\Requests\DictionaryWord\DictionaryWordDeleteRequest;
use App\Repository\DictionaryWord\DictionaryWordRepository;

class DictionaryWordController extends Controller
{

    protected $dictionaryword;

    public function __construct(DictionaryWordRepository $dictionaryword)
    {
        $this->dictionaryword = $dictionaryword;
    }
    public function createDictionaryWord(DictionaryWordCreateRequest $request)
    {
        $query = $this->dictionaryword->createData($request->all());
        return response()->json($query); 
    }
    public function getDictionaryWordList(DictionaryWordGetRequest $request)
    {
        $query = $this->dictionaryword->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteDictionaryWord(DictionaryWordDeleteRequest $request)
    {   
        $query = $this->dictionaryword->delete($request->all());
        return response()->json($query);
    }
    public function updateDictionaryWord(DictionaryWordUpdateRequest $request)
    {
        $query = $this->dictionaryword->updateData($request->all());
        return response()->json($query);   
    }

}
