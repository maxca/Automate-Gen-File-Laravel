<?php
namespace App\Models\AuctionExtraBid;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class AuctionExtraBidModel extends Model
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
    protected $table = 'auction_extra_bid';

    

    protected $dates = ['created_at', 'updated_at'];
}
