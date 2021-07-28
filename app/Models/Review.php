<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
