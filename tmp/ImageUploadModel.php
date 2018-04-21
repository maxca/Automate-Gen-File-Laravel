<?php
namespace App\Models\ImageUpload;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageUploadModel extends Model
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
    protected $table = 'ImageUpload';

    

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
