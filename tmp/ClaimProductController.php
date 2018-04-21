<?php
namespace App\Http\Controllers\ClaimProduct;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClaimProduct\ClaimProductRequest;
use App\Http\Requests\ClaimProduct\ClaimProductGetRequest;
use App\Http\Requests\ClaimProduct\ClaimProductCreateRequest;
use App\Http\Requests\ClaimProduct\ClaimProductUpdateRequest;
use App\Http\Requests\ClaimProduct\ClaimProductDeleteRequest;
use App\Repository\ClaimProduct\ClaimProductRepository;

class ClaimProductController extends Controller
{

    protected $claimproduct;

    public function __construct(ClaimProductRepository $claimproduct)
    {
        $this->claimproduct = $claimproduct;
    }
    public function createClaimProduct(ClaimProductCreateRequest $request)
    {
        $query = $this->claimproduct->createData($request->all());
        return response()->json($query); 
    }
    public function getClaimProductList(ClaimProductGetRequest $request)
    {
        $query = $this->claimproduct->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteClaimProduct(ClaimProductDeleteRequest $request)
    {   
        $query = $this->claimproduct->delete($request->all());
        return response()->json($query);
    }
    public function updateClaimProduct(ClaimProductUpdateRequest $request)
    {
        $query = $this->claimproduct->updateData($request->all());
        return response()->json($query);   
    }

}
