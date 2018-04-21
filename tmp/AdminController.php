<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Http\Requests\Admin\AdminGetRequest;
use App\Http\Requests\Admin\AdminCreateRequest;
use App\Http\Requests\Admin\AdminUpdateRequest;
use App\Http\Requests\Admin\AdminDeleteRequest;
use App\Repository\Admin\AdminRepository;

class AdminController extends Controller
{

    protected $admin;

    public function __construct(AdminRepository $admin)
    {
        $this->admin = $admin;
    }
    public function createAdmin(AdminCreateRequest $request)
    {
        $query = $this->admin->createData($request->all());
        return response()->json($query); 
    }
    public function getAdminList(AdminGetRequest $request)
    {
        $query = $this->admin->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteAdmin(AdminDeleteRequest $request)
    {   
        $query = $this->admin->delete($request->all());
        return response()->json($query);
    }
    public function updateAdmin(AdminUpdateRequest $request)
    {
        $query = $this->admin->updateData($request->all());
        return response()->json($query);   
    }

}
