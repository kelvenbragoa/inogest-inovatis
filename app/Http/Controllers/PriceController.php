<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    //

    public function update(Request $request, Price $price)
    {
        //
        $data = $request->all();


        $price->update(
            $data,
            );
        return back();
    }
}
