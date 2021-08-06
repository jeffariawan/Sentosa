<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RefProductPicture extends Model
{
    use HasFactory;
    protected $table = 'ref_product_picture';
    protected $primaryKey = 'ref_product_picure_id';
    protected $guarded = [];

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
