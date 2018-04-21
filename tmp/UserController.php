<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use App\Http\Requests\User\GetUserRequest;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\DeleteUserRequest;
use App\Repository\User\UserRepository;

class UserController extends Controller
{

    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }
    public function createUser(CreateUserRequest $request)
    {
        $query = $this->user->createData($request->all());
        return response()->json($query); 
    }
    public function getUserList(GetUserRequest $request)
    {
        $query = $this->user->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteUser(DeleteUserRequest $request)
    {   
        $query = $this->user->delete($request->all());
        return response()->json($query);
    }
    public function updateUser(UpdateUserRequest $request)
    {
        $query = $this->user->updateData($request->all());
        return response()->json($query);   
    }

}
