<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function quotation(){
        return $this->hasOne('App\Models\Quotation', 'id', 'quotation_id');
    }
}
