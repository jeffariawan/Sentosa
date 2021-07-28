<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
