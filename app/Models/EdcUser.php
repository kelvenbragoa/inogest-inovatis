<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EdcUser extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function edccategory(){
        return $this->hasOne('App\Models\EdcCategory', 'id', 'categoria');
    }

    public function shift(){
        return $this->hasOne('App\Models\Shift', 'id', 'turno');
    }

    public function user(){
        return $this->hasOne('App\Models\User', 'id', 'colaboradoredc');
    }
}
