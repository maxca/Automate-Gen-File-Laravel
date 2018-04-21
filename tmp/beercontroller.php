<?php
namespace App\Http\Controllers\beer;

use App\Http\Controllers\Controller;
use App\Http\Requests\beer\beerRequest;
use App\Repositories\beer\beerRepository;

class beerController extends Controller
{

    protected $beer;
    protected $request;

    public function __construct(beerRepository $beer)
    {
        $this->beer = $beer;
    }
    public function index(beerRequest $request)
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
