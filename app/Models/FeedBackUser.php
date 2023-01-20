<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBackUser extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function province(){
        return $this->hasOne('App\Models\Provinces', 'id', 'province_id');
    }

    public function user(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
