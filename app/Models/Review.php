<?php

namespace App\Models;

use App\Models\SalesH;
use App\Models\Worker;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $primaryKey = 'review_id';
    protected $guarded = [];

    public function SalesH()
    {
        return $this->belongsTo(SalesH::class, 'sales_h_id', 'sales_h_id');
    }

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    public function Worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id', 'worker_id');
    }
}
