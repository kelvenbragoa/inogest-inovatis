<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Expenses;
use App\Models\Invoice;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FinanceController extends Controller
{
    //
    public function index()
    {
        //
        App::setLocale(auth()->user()->lang);
        $total_salary = number_format(Employees::sum('salary_base'));
        $total_subsidy = number_format(Employees::sum('subsidy'));
        $quotations = Quotation::where('status',0)->get();

        $expenses = number_format(Expenses::sum('value'));
 
        $invoice = Invoice::get();
        
        return view('admin.finance',compact('total_salary','total_subsidy','quotations','expenses','invoice'));
    }
}
