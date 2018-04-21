<?php
namespace App\Http\Controllers\Chat2;

use App\Http\Controllers\Controller;
use App\Http\Requests\Chat2\Chat2Request;
use App\Repositories\Chat2\Chat2Repository;

class Chat2Controller extends Controller
{

    protected $Chat2;
    protected $request;

    public function __construct(Chat2Repository $Chat2)
    {
        $this->Chat2 = $Chat2;
    }
    public function index(Chat2Request $request)
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
