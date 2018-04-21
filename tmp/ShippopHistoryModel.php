<?php
namespace App\Models\ShippopHistory;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class ShippopHistoryModel extends Model
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
    protected $table = 'shippop_history';

    

    protected $dates = ['created_at', 'updated_at'];
}
