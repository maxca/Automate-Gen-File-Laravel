<?php
namespace App\Http\Controllers\AuthJWT;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthJWT\AuthJWTRequest;
use App\Repository\AuthJWT\AuthJWTRepository;

class AuthJWTController extends Controller
{

    protected $AuthJWT;
    protected $request;

    public function __construct(AuthJWTRepository $AuthJWT)
    {
        $this->AuthJWT = $AuthJWT;
    }
    public function index(AuthJWTRequest $request)
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
