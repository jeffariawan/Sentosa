<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $guarded = [];
    
    public function RefProductPicture()
    {
        return $this->hasMany(RefProductPicture::class, 'ref_product_picture_id', 'ref_product_picture_id');
    }

    public function ProductOffering()
    {
        return $this->hasMany(ProductOffering::class, 'product_offering_id', 'product_offering_id');
    }

    public function RefProductCategory()
    {
        return $this->belongsTo(RefProductCategory::class, 'ref_product_category_id', 'ref_product_category_id');
    }

    public function RefPicture()
    {
        return $this->hasMany(RefPicture::class, 'ref_picture_id', 'ref_picture_id');
    }
}
