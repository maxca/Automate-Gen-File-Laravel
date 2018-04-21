<?php
namespace App\Models\OrdersInstallment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersInstallmentModel extends Model
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
    protected $table = 'OrdersInstallment';

    

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
