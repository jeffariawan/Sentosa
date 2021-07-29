<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';
    protected $primaryKey = 'payment_id';
    protected $guarded = [];
    
    public function SalesH()
    {
        return $this->hasMany(SalesH::class, 'sales_h_id', 'sales_h_id');
    }
}
