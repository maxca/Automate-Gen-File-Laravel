<?php
namespace App\Models\MerchantRegister;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantRegisterModel extends Model
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
    protected $table = 'MerchantRegister';

    

    protected $dates = ['created_at', 'updated_at'];
}
