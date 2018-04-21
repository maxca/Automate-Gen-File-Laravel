<?php
namespace App\Http\Controllers\OptionValues;

use App\Http\Controllers\Controller;
use App\Http\Requests\OptionValues\OptionValuesRequest;
use App\Http\Requests\OptionValues\OptionValuesGetRequest;
use App\Http\Requests\OptionValues\OptionValuesCreateRequest;
use App\Http\Requests\OptionValues\OptionValuesUpdateRequest;
use App\Http\Requests\OptionValues\OptionValuesDeleteRequest;
use App\Repository\OptionValues\OptionValuesRepository;

class OptionValuesController extends Controller
{

    protected $optionvalues;

    public function __construct(OptionValuesRepository $optionvalues)
    {
        $this->optionvalues = $optionvalues;
    }
    public function createOptionValues(OptionValuesCreateRequest $request)
    {
        $query = $this->optionvalues->createData($request->all());
        return response()->json($query); 
    }
    public function getOptionValuesList(OptionValuesGetRequest $request)
    {
        $query = $this->optionvalues->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOptionValues(OptionValuesDeleteRequest $request)
    {   
        $query = $this->optionvalues->delete($request->all());
        return response()->json($query);
    }
    public function updateOptionValues(OptionValuesUpdateRequest $request)
    {
        $query = $this->optionvalues->updateData($request->all());
        return response()->json($query);   
    }

}
