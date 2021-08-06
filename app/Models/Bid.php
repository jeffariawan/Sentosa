<?php

namespace App\Models;

use App\Models\Worker;
use App\Models\Auction;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bid extends Model
{
    use HasFactory;
    protected $table = 'bid';
    protected $primaryKey = 'bid_id';
    protected $guarded = [];

    public function Worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id', 'worker_id');
    }

    public function Project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}
