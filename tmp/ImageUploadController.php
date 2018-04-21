<?php
namespace App\Http\Controllers\ImageUpload;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageUpload\ImageUploadRequest;
use App\Repository\ImageUpload\ImageUploadRepository;

class ImageUploadController extends Controller
{

    protected $ImageUpload;
    protected $request;

    public function __construct(ImageUploadRepository $ImageUpload)
    {
        $this->ImageUpload = $ImageUpload;
    }
    public function index(ImageUploadRequest $request)
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
