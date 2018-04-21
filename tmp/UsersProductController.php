<?php
namespace App\Http\Controllers\UsersProduct;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersProduct\UsersProductRequest;
use App\Http\Requests\UsersProduct\UsersProductGetRequest;
use App\Http\Requests\UsersProduct\UsersProductCreateRequest;
use App\Http\Requests\UsersProduct\UsersProductUpdateRequest;
use App\Http\Requests\UsersProduct\UsersProductDeleteRequest;
use App\Repository\UsersProduct\UsersProductRepository;

class UsersProductController extends Controller
{

    protected $usersproduct;

    public function __construct(UsersProductRepository $usersproduct)
    {
        $this->usersproduct = $usersproduct;
    }
    public function createUsersProduct(UsersProductCreateRequest $request)
    {
        $query = $this->usersproduct->createData($request->all());
        return response()->json($query); 
    }
    public function getUsersProductList(UsersProductGetRequest $request)
    {
        $query = $this->usersproduct->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteUsersProduct(UsersProductDeleteRequest $request)
    {   
        $query = $this->usersproduct->delete($request->all());
        return response()->json($query);
    }
    public function updateUsersProduct(UsersProductUpdateRequest $request)
    {
        $query = $this->usersproduct->updateData($request->all());
        return response()->json($query);   
    }

}
