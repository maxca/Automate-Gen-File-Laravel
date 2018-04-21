<?php
namespace App\Http\Controllers\Call3rdParty;

use App\Http\Controllers\Controller;
use App\Http\Requests\Call3rdParty\Call3rdPartyRequest;
use App\Repository\Call3rdParty\Call3rdPartyRepository;

class Call3rdPartyController extends Controller
{

    protected $Call3rdParty;
    protected $request;

    public function __construct(Call3rdPartyRepository $Call3rdParty)
    {
        $this->Call3rdParty = $Call3rdParty;
    }
    public function index(Call3rdPartyRequest $request)
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
