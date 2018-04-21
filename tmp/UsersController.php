<?php
namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UsersRequest;
use App\Http\Requests\Users\UsersGetRequest;
use App\Http\Requests\Users\UsersCreateRequest;
use App\Http\Requests\Users\UsersUpdateRequest;
use App\Http\Requests\Users\UsersDeleteRequest;
use App\Repository\Users\UsersRepository;

class UsersController extends Controller
{

    protected $users;

    public function __construct(UsersRepository $users)
    {
        $this->users = $users;
    }
    public function createUsers(UsersCreateRequest $request)
    {
        $query = $this->users->createData($request->all());
        return response()->json($query); 
    }
    public function getUsersList(UsersGetRequest $request)
    {
        $query = $this->users->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteUsers(UsersDeleteRequest $request)
    {   
        $query = $this->users->delete($request->all());
        return response()->json($query);
    }
    public function updateUsers(UsersUpdateRequest $request)
    {
        $query = $this->users->updateData($request->all());
        return response()->json($query);   
    }

}
