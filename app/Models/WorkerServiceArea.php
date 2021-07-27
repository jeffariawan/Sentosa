<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerServiceArea extends Model
{
    use HasFactory;
    protected $table = 'worker_service_area';
    protected $primaryKey = 'worker_service_area_id';
    protected $guarded = [];

    public function Worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id', 'worker_id');
    }

    public function RefProvince()
    {
        return $this->belongsTo(RefProvince::class, 'ref_province_id', 'ref_province_id');
    }
}
