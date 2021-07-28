<?php

namespace App\Models;

use App\Models\User;
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

    public function Auction()
    {
        return $this->hasMany(Auction::class, 'auction_id', 'auction_id');
    }

    public function Survey()
    {
        return $this->hasMany(Survey::class, 'survey_id', 'survey_id');
    }

    public function ProjectProgress()
    {
        return $this->hasMany(ProjectProgress::class, 'project_progress_id', 'project_progress_id');
    }
}
