<?php
namespace App\Http\Controllers\OptionProductStock;

use App\Http\Controllers\Controller;
use App\Http\Requests\OptionProductStock\OptionProductStockRequest;
use App\Http\Requests\OptionProductStock\OptionProductStockGetRequest;
use App\Http\Requests\OptionProductStock\OptionProductStockCreateRequest;
use App\Http\Requests\OptionProductStock\OptionProductStockUpdateRequest;
use App\Http\Requests\OptionProductStock\OptionProductStockDeleteRequest;
use App\Repository\OptionProductStock\OptionProductStockRepository;

class OptionProductStockController extends Controller
{

    protected $optionproductstock;

    public function __construct(OptionProductStockRepository $optionproductstock)
    {
        $this->optionproductstock = $optionproductstock;
    }
    public function createOptionProductStock(OptionProductStockCreateRequest $request)
    {
        $query = $this->optionproductstock->createData($request->all());
        return response()->json($query); 
    }
    public function getOptionProductStockList(OptionProductStockGetRequest $request)
    {
        $query = $this->optionproductstock->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOptionProductStock(OptionProductStockDeleteRequest $request)
    {   
        $query = $this->optionproductstock->delete($request->all());
        return response()->json($query);
    }
    public function updateOptionProductStock(OptionProductStockUpdateRequest $request)
    {
        $query = $this->optionproductstock->updateData($request->all());
        return response()->json($query);   
    }

}
