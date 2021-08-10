<?php

namespace App\Models;

use App\Models\User;
use App\Models\RefProvince;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';
    protected $primaryKey = 'project_id';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function ProjectServiceDemand()
    {
        return $this->hasMany(ProjectServiceDemand::class, 'project_service_demand_id', 'project_service_demand_id');
    }

    public function Survey()
    {
        return $this->hasMany(Survey::class, 'survey_id', 'survey_id');
    }

    public function ProjectProgress()
    {
        return $this->hasMany(ProjectProgress::class, 'project_progress_id', 'project_progress_id');
    }

    public function RefProvince()
    {
        return $this->belongsTo(RefProvince::class, 'ref_province_id', 'ref_province_id');
    }

    public function Bid()
    {
        return $this->hasMany(Bid::class, 'bid_id', 'bid_id');
    }
    public function SalesH()
    {
        return $this->hasOne(SalesH::class, 'sales_h_id', 'bid_h_id');
    }
}
