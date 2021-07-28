<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefService extends Model
{
    use HasFactory;
    protected $table = 'ref_service';
    protected $primaryKey = 'ref_service_id';
    protected $guarded = [];
    
    public function WorkerService()
    {
        return $this->hasMany(WorkerService::class, 'worker_service_id', 'worker_service_id');
    }

    public function ProjectServiceDemand()
    {
        return $this->hasMany(ProjectServiceDemand::class, 'project_service_demand_id', 'project_service_demand_id');
    }
}
