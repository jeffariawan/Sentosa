<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WorkerLevel;

class Worker extends Model
{
    use HasFactory;
    protected $table = 'worker';
    protected $primaryKey = 'worker_id';
    protected $guarded = [];

    public function WorkerLevel()
    {
        return $this->belongsTo(WorkerLevel::class, 'worker_level_id', 'worker_level_id');
    }

    public function WorkerServiceArea()
    {
        return $this->hasMany(WorkerServiceArea::class, 'worker_service_area_id', 'worker_service_area_id');
    }

    public function WorkerService()
    {
        return $this->hasMany(WorkerService::class, 'worker_service_id', 'worker_service_id');
    }

    public function Bid()
    {
        return $this->hasMany(Bid::class, 'bid_id', 'bid_id');
    }

    public function Survey()
    {
        return $this->hasMany(Survey::class, 'survey_id', 'survey_id');
    }

    public function WorkerPortofolio()
    {
        return $this->hasMany(WorkerPortofolio::class, 'worker_portofolio_id', 'worker_portofolio_id');
    }
}
