<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;
    protected $table = 'auction';
    protected $primaryKey = 'auction_id';
    protected $guarded = [];

    public function Project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }

    public function Bid()
    {
        return $this->hasMany(Bid::class, 'bid_id', 'bid_id');
    }
}
