<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerPortofolio extends Model
{
    use HasFactory;
    protected $table = 'worker_portofolio';
    protected $primaryKey = 'worker_portofolio_id';
    protected $guarded = [];

    public function Worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id', 'worker_id');
    }

    public function RefPicture()
    {
        return $this->hasMany(RefPicture::class, 'ref_picture_id', 'ref_picture_id');
    }

    public function RefService()
    {
        return $this->belongsTo(RefService::class, 'ref_service_id', 'ref_service_id');
    }
}
