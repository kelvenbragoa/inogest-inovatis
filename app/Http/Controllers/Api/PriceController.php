<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    //

    public function getPrice($id)
    {
        $price = Price::find($id);
       
        return response([
            'price'=>$price->amount
        ],200);
    }
}
