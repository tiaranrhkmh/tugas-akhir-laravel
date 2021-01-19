<?php

namespace App\Http\Controllers;

use App\book_return;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //$dataku=DB::table('book_returns')
          //  ->whereExists(function ($query){
            //    $query->select(DB::raw(1))
              //        ->from('users')
                //      ->whereRaw('users.NIM = book_returns.NIM');
            //})->get();
        $dataku=book_return::all();
        return view('home', ['book_returns' => $dataku]);
    }
}
