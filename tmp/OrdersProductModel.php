<?php
namespace App\Models\OrdersProduct;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersProductModel extends Model
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
    protected $table = 'OrdersProduct';

    

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
