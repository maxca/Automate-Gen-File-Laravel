<?php
namespace App\Models\ProductCollection;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCollectionModel extends Model
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
    protected $table = 'ProductCollection';

    

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
