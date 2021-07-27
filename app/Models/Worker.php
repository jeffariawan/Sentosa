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
}
