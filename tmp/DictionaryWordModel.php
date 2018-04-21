<?php
namespace App\Models\DictionaryWord;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class DictionaryWordModel extends Model
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
    protected $table = 'dictionary_word';

    

    protected $dates = ['created_at', 'updated_at'];
}
