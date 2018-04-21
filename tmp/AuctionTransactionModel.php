<?php
namespace App\Models\AuctionTransaction;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class AuctionTransactionModel extends Model
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
    protected $table = 'auction_transaction';

    

    protected $dates = ['created_at', 'updated_at'];
}
