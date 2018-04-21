<?php
namespace App\Http\Controllers\Marks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Marks\MarksRequest;
use App\Repositories\Marks\MarksRepository;

class MarksController extends Controller
{

    protected $Marks;
    protected $request;

    public function __construct(MarksRepository $Marks)
    {
        $this->Marks = $Marks;
    }
    public function index(MarksRequest $request)
    {
      
    }
    public function getList()
    {
        
    }
    public function delete()
    {
        
    }
    public function update()
    {
        
    }
}
