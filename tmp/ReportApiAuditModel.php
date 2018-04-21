<?php
namespace App\Models\ReportApiAudit;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class ReportApiAuditModel extends Model
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
    protected $table = 'report_api_audit';

    

    protected $dates = ['created_at', 'updated_at'];
}
