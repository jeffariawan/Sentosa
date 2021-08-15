<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidComment extends Model
{
    use HasFactory;
    protected $table = 'bid_comment';
    protected $primaryKey = 'bid_comment_id';
    protected $guarded = [];


    public function Bid()
    {
        return $this->belongsTo(Bid::class, 'bid_id', 'bid_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
