<?php
namespace App\Models\AuthJWT;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuthJWTModel extends Model
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
    protected $table = 'AuthJWT';

    

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
