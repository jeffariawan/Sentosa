<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesH extends Model
{
    use HasFactory;
    protected $table = 'sales_h';
    protected $primaryKey = 'sales_h_id';
    protected $guarded = [];
    
    public function SalesD()
    {
        return $this->hasMany(SalesD::class, 'sales_d_id', 'sales_d_id');
    }

    public function Review()
    {
        return $this->hasMany(Review::class, 'review_id', 'review_id');
    }

    public function RefCourier()
    {
        return $this->belongsTo(RefCourier::class, 'ref_courier_id', 'ref_courier_id');
    }

    public function Payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'payment_id');
    }
}
