<?php
namespace App\Models\Merchant_register;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant_registerModel extends Model
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
    protected $table = 'Merchant_register';

    

    protected $dates = ['created_at', 'updated_at'];
}
