<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefPicture extends Model
{
    use HasFactory;
    protected $table = 'ref_picture';
    protected $primaryKey = 'ref_picure_id';
    protected $guarded = [];

    public function WorkerPortofolio()
    {
        return $this->belongsTo(WorkerPortofolio::class, 'worker_portofolio_id', 'worker_portofolio_id');
    }

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
