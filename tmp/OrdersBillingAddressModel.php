<?php
namespace App\Models\OrdersBillingAddress;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersBillingAddressModel extends Model
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
    protected $table = 'OrdersBillingAddress';

    

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
