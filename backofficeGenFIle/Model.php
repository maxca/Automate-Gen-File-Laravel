<?php
namespace App\Models\{replace};

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class {replace}Model extends Model
{
	# use SoftDeletes;

    protected $fillable = [
        'id',
        'sort',
        'status',
        'discount',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    protected $table = '{replace_snc}';

    

    protected $dates = ['created_at', 'updated_at'];
}
