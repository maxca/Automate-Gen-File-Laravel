<?php
namespace App\Models\OptionProductStock;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class OptionProductStockModel extends Model
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
    protected $table = 'option_product_stock';

    

    protected $dates = ['created_at', 'updated_at'];
}
