<?php
namespace App\Models\OrdersShippingAddress;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersShippingAddressModel extends Model
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
    protected $table = 'OrdersShippingAddress';

    

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
