<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Fourseventencontroller extends Controller
{
    public function index()
    {
//$surveys = Survey::where('approved', '=', 1)
//->with( 'trips' )
//->get();

//return view( 'tripdatabase', compact('surveys') );
        return view('welcome');
    }
    public function index2(Request $request)
    {


        return 'asdf';
    }
}