<?php
namespace App\Models\MemberShippingAddress;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class MemberShippingAddressModel extends Model
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
    protected $table = 'member_shipping_address';

    

    protected $dates = ['created_at', 'updated_at'];
}
