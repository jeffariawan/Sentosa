<?php

namespace App\Models;

use App\Models\Product;
use App\Models\RefProvince;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductOffering extends Model
{
    use HasFactory;
    protected $table = 'product_offering';
    protected $primaryKey = 'product_offering_id';
    protected $guarded = [];

    public function RefProvince()
    {
        return $this->belongsTo(RefProvince::class, 'ref_province_id', 'ref_province_id');
    }

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    public function SalesD()
    {
        return $this->hasMany(SalesD::class, 'sales_d_id', 'sales_d_id');
    }
}
