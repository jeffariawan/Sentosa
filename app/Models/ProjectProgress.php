<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
