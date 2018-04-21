<?php
namespace App\Models\ProductWishlist;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductWishlistModel extends Model
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
    protected $table = 'ProductWishlist';

    

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
