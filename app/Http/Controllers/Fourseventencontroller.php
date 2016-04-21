<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests;
use App\Invoice;
use App\Patientvisit;
use App\Diagnosis; 
use App\Diagnosisnote;
use App\Drug;
use App\Drugscript;
use App\Medicalpersciption; 
use App\Payment;
use App\Policy; 
use App\Procedure;
use App\Procedurenote; 
use App\Referral;
use App\Room;
use App\Service;
use App\Staff;
use App\Test;

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
    public function diagnosispage()
    {
        $diagnosis = Diagnosis::all();

        return view('diagnosis', compact('diagnosis')); 
    }
    public function diagnosisnotepage()
    {
        $diagnosisnote = Diagnosisnote::all(); 

        return view('diagnosisnote', compact('diagnosisnote')); 
    }
    public function drugpage()
    {
        $drug = Drug::all();

        return view('drug', compact('drug'));
    }
    public function drugscriptpage()
    {
        $drugscript = Drugscript::all();

        return view('drugscript', compact('drugscript'));
    }
    public function medicalpersciptionpage()
    {
        $medicalpersciption = Medicalpersciption::all();

        return view('medicalpersciption', compact('medicalpersciption'));
        
    }
    public function paymentpage()
    {
        $payment = Payment::all();

        return view('payment', compact('payment'));
    }
    public function procedurepage()
    {
        $procedure = Procedure::all();

        return view('procedure', compact('procedure'));
    }
    public function procedurenotepage()
    {
        $procedurenote = Procedurenote::all();

        return view('procedurenote', compact('procedurenote'));
    }
    public function referralpage()
    {
        $refferal = Referral::all();

        return view('referral', compact('referral'));
    }
    public function roompage()
    {
        $room = Room::all();

        return view('room', compact('room'));
    }
    public function servicepage()
    {
        $service = Service::all();

        return view('service', compact('service'));
        
    }
    public function staffpage()
    {
        $staff = Staff::all();

        return view('staff', compact('staff'));
    }
    public function testpage()
    {
        $test = Test::all();

        return view('test', compact('test'));
    }
}