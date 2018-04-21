<?php
namespace App\Models\OrdersPayment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersPaymentModel extends Model
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
    protected $table = 'OrdersPayment';

    

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
