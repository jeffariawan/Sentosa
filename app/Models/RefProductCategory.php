<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefProductCategory extends Model
{
    use HasFactory;
    protected $table = 'ref_product_category';
    protected $primaryKey = 'ref_product_category_id';
    protected $guarded = [];
    
    public function Product()
    {
        return $this->hasMany(Product::class, 'product_id', 'product_id');
    }
}
