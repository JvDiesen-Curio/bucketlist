<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bucketlist extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user-id');
    }

    public function items()
    {
        return $this->hasMany(Bucketlist_items::class, 'bucketlist_id');
    }
}
