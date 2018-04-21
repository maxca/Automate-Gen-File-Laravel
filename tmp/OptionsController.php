<?php
namespace App\Http\Controllers\Options;

use App\Http\Controllers\Controller;
use App\Http\Requests\Options\OptionsRequest;
use App\Http\Requests\Options\OptionsGetRequest;
use App\Http\Requests\Options\OptionsCreateRequest;
use App\Http\Requests\Options\OptionsUpdateRequest;
use App\Http\Requests\Options\OptionsDeleteRequest;
use App\Repository\Options\OptionsRepository;

class OptionsController extends Controller
{

    protected $options;

    public function __construct(OptionsRepository $options)
    {
        $this->options = $options;
    }
    public function createOptions(OptionsCreateRequest $request)
    {
        $query = $this->options->createData($request->all());
        return response()->json($query); 
    }
    public function getOptionsList(OptionsGetRequest $request)
    {
        $query = $this->options->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOptions(OptionsDeleteRequest $request)
    {   
        $query = $this->options->delete($request->all());
        return response()->json($query);
    }
    public function updateOptions(OptionsUpdateRequest $request)
    {
        $query = $this->options->updateData($request->all());
        return response()->json($query);   
    }

}
