<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefProvince extends Model
{
    use HasFactory;
    protected $table = 'ref_province';
    protected $primaryKey = 'ref_province_id';
    protected $guarded = [];
    
    public function User()
    {
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }

}
