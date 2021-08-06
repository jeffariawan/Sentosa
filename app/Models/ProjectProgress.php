<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectProgress extends Model
{
    use HasFactory;
    protected $table = 'project_progress';
    protected $primaryKey = 'project_progress_id';
    protected $guarded = [];

    public function Project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}
