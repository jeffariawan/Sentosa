<?php

namespace App\Models;

use App\Models\RefService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Worker;

class WorkerService extends Model
{
    use HasFactory;
    protected $table = 'worker_service';
    protected $primaryKey = 'worker_service_id';
    protected $guarded = [];

    public function RefService()
    {
        return $this->belongsTo(RefService::class, 'ref_service_id', 'ref_service_id');
    }

    public function Worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id', 'worker_id');
    }
}
