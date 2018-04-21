<?php
namespace App\Models\Call3rdParty;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Call3rdPartyModel extends Model
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
    protected $table = 'Call3rdParty';

    

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
