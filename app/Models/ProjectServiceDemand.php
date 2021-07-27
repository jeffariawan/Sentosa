<?php

namespace App\Models;

use App\Models\Project;
use App\Models\RefService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectServiceDemand extends Model
{
    use HasFactory;
    protected $table = 'project_service_demand';
    protected $primaryKey = 'project_service_demand_id';
    protected $guarded = [];

    public function RefService()
    {
        return $this->belongsTo(RefService::class, 'ref_service_id', 'ref_service_id');
    }

    public function Project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}
