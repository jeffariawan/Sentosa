<?php

namespace App\Models;
use App\Models\RefProvince;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $guarded = [];
    
    public function RefProvince()
    {
        return $this->belongsTo(RefProvince::class, 'ref_province_id', 'ref_province_id');
    }
   
    protected $hidden = [
        'password',
        'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
