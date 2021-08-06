<?php

namespace App\Models;

use App\Models\SalesH;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
