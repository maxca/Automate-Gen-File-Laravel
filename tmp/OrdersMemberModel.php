<?php
namespace App\Models\OrdersMember;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersMemberModel extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'id',
        'sort',
        'status',
        'discount',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    protected $table = 'OrdersMember';

    

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
