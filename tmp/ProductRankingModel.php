<?php
namespace App\Models\ProductRanking;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class ProductRankingModel extends Model
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
    protected $table = 'ProductRanking';

    

    protected $dates = ['created_at', 'updated_at'];
}
