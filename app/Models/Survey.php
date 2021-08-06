<?php

namespace App\Models;

use App\Models\Worker;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Survey extends Model
{
    use HasFactory;
    protected $table = 'survey';
    protected $primaryKey = 'survey_id';
    protected $guarded = [];

    public function Project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }

    public function Worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id', 'worker_id');
    }
}
