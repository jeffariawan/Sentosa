<?php
namespace App\Services;

use App\Services\ProjectService;

class ProjectService
{
 public function getProject(int $count)
 {
    $project = Project::orderby('created_at')->paginate($count);
    return $project;
 }

}