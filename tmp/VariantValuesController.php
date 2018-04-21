<?php
namespace App\Http\Controllers\VariantValues;

use App\Http\Controllers\Controller;
use App\Http\Requests\VariantValues\VariantValuesRequest;
use App\Http\Requests\VariantValues\VariantValuesGetRequest;
use App\Http\Requests\VariantValues\VariantValuesCreateRequest;
use App\Http\Requests\VariantValues\VariantValuesUpdateRequest;
use App\Http\Requests\VariantValues\VariantValuesDeleteRequest;
use App\Repository\VariantValues\VariantValuesRepository;

class VariantValuesController extends Controller
{

    protected $variantvalues;

    public function __construct(VariantValuesRepository $variantvalues)
    {
        $this->variantvalues = $variantvalues;
    }
    public function createVariantValues(VariantValuesCreateRequest $request)
    {
        $query = $this->variantvalues->createData($request->all());
        return response()->json($query); 
    }
    public function getVariantValuesList(VariantValuesGetRequest $request)
    {
        $query = $this->variantvalues->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteVariantValues(VariantValuesDeleteRequest $request)
    {   
        $query = $this->variantvalues->delete($request->all());
        return response()->json($query);
    }
    public function updateVariantValues(VariantValuesUpdateRequest $request)
    {
        $query = $this->variantvalues->updateData($request->all());
        return response()->json($query);   
    }

}
