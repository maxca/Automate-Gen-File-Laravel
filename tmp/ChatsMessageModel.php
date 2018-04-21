<?php
namespace App\Models\ChatsMessage;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class ChatsMessageModel extends Model
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
    protected $table = 'ChatsMessage';

    

    protected $dates = ['created_at', 'updated_at'];
}
