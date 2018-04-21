<?php
namespace App\Http\Controllers\UploadFile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadFile\UploadFileRequest;
use App\Http\Requests\UploadFile\UploadFileGetRequest;
use App\Http\Requests\UploadFile\UploadFileCreateRequest;
use App\Http\Requests\UploadFile\UploadFileUpdateRequest;
use App\Http\Requests\UploadFile\UploadFileDeleteRequest;
use App\Repository\UploadFile\UploadFileRepository;

class UploadFileController extends Controller
{

    protected $uploadfile;

    public function __construct(UploadFileRepository $uploadfile)
    {
        $this->uploadfile = $uploadfile;
    }
    public function createUploadFile(UploadFileCreateRequest $request)
    {
        $query = $this->uploadfile->createData($request->all());
        return response()->json($query); 
    }
    public function getUploadFileList(UploadFileGetRequest $request)
    {
        $query = $this->uploadfile->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteUploadFile(UploadFileDeleteRequest $request)
    {   
        $query = $this->uploadfile->delete($request->all());
        return response()->json($query);
    }
    public function updateUploadFile(UploadFileUpdateRequest $request)
    {
        $query = $this->uploadfile->updateData($request->all());
        return response()->json($query);   
    }

}
