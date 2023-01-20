<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function employee(){
        return $this->hasOne('App\Models\Employees', 'id', 'employee_id');
    }
}
