<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesD extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $primaryKey = 'review_id';
    protected $guarded = [];

    public function SalesH()
    {
        return $this->belongsTo(SalesH::class, 'sales_h_id', 'sales_h_id');
    }

    public function ProductOffering()
    {
        return $this->belongsTo(ProductOffering::class, 'product_offering_id', 'product_offering_id');
    }

    public function Project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}
