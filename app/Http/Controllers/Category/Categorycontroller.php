<?php
namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Repositories\Category\CategoryRepository;

class CategoryController extends Controller
{

    protected $Category;
    protected $request;

    public function __construct(CategoryRepository $Category)
    {
        $this->Category = $Category;
    }
    public function index(CategoryRequest $request)
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
