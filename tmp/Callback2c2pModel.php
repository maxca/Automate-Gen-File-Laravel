<?php
namespace App\Models\Callback2c2p;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class Callback2c2pModel extends Model
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
    protected $table = 'callback2c2p';

    

    protected $dates = ['created_at', 'updated_at'];
}
