<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function customer(){
        return $this->hasOne('App\Models\Costumers', 'id', 'customer_id');
    }

    public function quotation_detail(){
        return $this->hasMany(ItemQuotation::class)->orderBy('created_at','DESC');
    }
}
