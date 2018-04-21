<?php
namespace App\Models\AuctionTrasaction;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class AuctionTrasactionModel extends Model
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
    protected $table = 'auction_trasaction';

    

    protected $dates = ['created_at', 'updated_at'];
}
