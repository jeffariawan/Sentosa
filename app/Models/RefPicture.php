<?php

namespace App\Models;

use App\Models\Product;
use App\Models\WorkerPortofolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
