<?php
namespace App\Http\Controllers\{replace};

use App\Http\Controllers\Controller;
use App\Http\Requests\{replace}\{replace}Request;
use App\Http\Requests\{replace}\{replace}GetRequest;
use App\Http\Requests\{replace}\{replace}CreateRequest;
use App\Http\Requests\{replace}\{replace}UpdateRequest;
use App\Http\Requests\{replace}\{replace}DeleteRequest;
use App\Repository\{replace}\{replace}Repository;

class {replace}Controller extends Controller
{

    protected ${replace_sm};

    public function __construct({replace}Repository ${replace_sm})
    {
        $this->{replace_sm} = ${replace_sm};
    }
    public function create{replace}({replace}CreateRequest $request)
    {
        $query = $this->{replace_sm}->createData($request->all());
        return response()->json($query); 
    }
    public function get{replace}List({replace}GetRequest $request)
    {
        $query = $this->{replace_sm}->search($request->all())->getData();
        return response()->json($query);   
    }
    public function delete{replace}({replace}DeleteRequest $request)
    {   
        $query = $this->{replace_sm}->delete($request->all());
        return response()->json($query);
    }
    public function update{replace}({replace}UpdateRequest $request)
    {
        $query = $this->{replace_sm}->updateData($request->all());
        return response()->json($query);   
    }

}
