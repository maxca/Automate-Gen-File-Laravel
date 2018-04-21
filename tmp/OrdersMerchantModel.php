<?php
namespace App\Models\OrdersMerchant;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersMerchantModel extends Model
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
    protected $table = 'orders_merchant';

    

    protected $dates = ['created_at', 'updated_at'];
}
