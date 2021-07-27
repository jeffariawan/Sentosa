<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerLevel extends Model
{
    use HasFactory;
    protected $table = 'worker_level';
    protected $primaryKey = 'worker_level_id';
    protected $guarded = [];
    
    public function Worker()
    {
        return $this->hasMany(Worker::class, 'worker_id', 'worker_id');
    }

}
