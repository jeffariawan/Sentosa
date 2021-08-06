<?php

namespace App\Models;

use App\Models\RefProvince;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RefCourier extends Model
{
    use HasFactory;
    protected $table = 'ref_courier';
    protected $primaryKey = 'ref_courier_id';
    protected $guarded = [];
    
    public function SalesH()
    {
        return $this->hasMany(SalesH::class, 'sales_h_id', 'sales_h_id');
    }

    public function RefProvince()
    {
        return $this->belongsTo(RefProvince::class, 'ref_province_id', 'ref_province_id');
    }
}
