<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests;
use App\Invoice;
use App\Patientvisit;
use DB;
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
    public function store(Request $request)
    {
       // $request->input('sqlquery');

        $results = DB::select( DB::raw($request->input('sqlquery')) );
        $arrazy = json_decode(json_encode($results), true);
        $valz = array_values($arrazy);
       // dd($valz);

        //dd($arrazy);
        return view('sqlresults', compact('arrazy','valz'));
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