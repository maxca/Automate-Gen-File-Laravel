<?php
namespace App\Http\Controllers\Dictionary;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dictionary\DictionaryRequest;
use App\Http\Requests\Dictionary\DictionaryGetRequest;
use App\Http\Requests\Dictionary\DictionaryCreateRequest;
use App\Http\Requests\Dictionary\DictionaryUpdateRequest;
use App\Http\Requests\Dictionary\DictionaryDeleteRequest;
use App\Repository\Dictionary\DictionaryRepository;

class DictionaryController extends Controller
{

    protected $dictionary;

    public function __construct(DictionaryRepository $dictionary)
    {
        $this->dictionary = $dictionary;
    }
    public function createDictionary(DictionaryCreateRequest $request)
    {
        $query = $this->dictionary->createData($request->all());
        return response()->json($query); 
    }
    public function getDictionaryList(DictionaryGetRequest $request)
    {
        $query = $this->dictionary->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteDictionary(DictionaryDeleteRequest $request)
    {   
        $query = $this->dictionary->delete($request->all());
        return response()->json($query);
    }
    public function updateDictionary(DictionaryUpdateRequest $request)
    {
        $query = $this->dictionary->updateData($request->all());
        return response()->json($query);   
    }

}
