<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expenses;
use App\Models\User;
use App\Notifications\ExpenseNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Notification;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        App::setLocale(auth()->user()->lang);
        $categories = Category::get();
        $expenses = Expenses::get();
        return view('admin.expenses.index', compact('expenses', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = User::all();
        $data = $request->all();
        // dd($data);
        Expenses::create([
            'value' => $data['value'],
            'reason' => $data['reason'],
            'category_id' => $data['category_id'],
            'user_id' => auth()->user()->id
        ]);

        $msg = "New expense added,".$data['reason']." in the amount of ".$data['value'];

        Notification::send($user,new ExpenseNotification($msg));

        

        return back()->with('messageSuccess','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $expenses = Expenses::find($id);
        $expenses->delete();
            return back()->with('messageSuccess','Success');
    }
}
