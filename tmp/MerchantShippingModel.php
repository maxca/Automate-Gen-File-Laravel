<?php
namespace App\Models\MerchantShipping;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantShippingModel extends Model
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
    protected $table = 'merchant_shipping';

    

    protected $dates = ['created_at', 'updated_at'];
}
