<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests;
use App\Invoice;
use App\Patientvisit;

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
    public function index3()
    {
        $patients = Patient::all();


        return view('first', compact('patients'));
    }
    public function invoicepage()
    {
        $invoices = Invoice::all();


        return view('invoices', compact('invoices'));
    }
    public function patientvisitpage()
    {
        $patientvisits = Patientvisit::all();


        return view('patientvisits', compact('patientvisits'));
    }
}