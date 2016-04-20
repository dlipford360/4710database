@extends('layouts.app')

@section('content')

@foreach($patients as $id => $patient)
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-body">
        <table class="table table-striped table-responsive" style="table-layout:fixed">
            <tr>

                    <td><label  style="width: 22%; display:inline-block"><a> {{$patient->name}}</a></label></td>


            </tr>
        </table>

        <table width="100%">
            <tr>
                <td>
                    <div class="row">
                        <div>
                            <div class="col-md-6"  >
                                <ul class="list-unstyled">

                                    <li><label  >id:</label> {{$patient->id}}</li>
                                    <li><label>phone:</label> {{$patient->phone}}</li>
                                    <li><label>date of birth:</label> {{$patient->dob}}</li>
                                    <li><label  >relationship to insured:</label>{{$patient->relationship_to_insured}}</li>

                            </ul>
                            </div>
                            <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><label  >POLICY INFO:</label></li>

                        <li><label >invoice number:</label>{{$patient->policy->id}}</li>
                                    <li><label >company:</label>{{$patient->policy->policy_type}}</li>
                                    <li><label >medical copay:</label>{{$patient->policy->medical_copay}}</li>
                                    <li><label >lab copay:</label>{{$patient->policy->lab_copay}}</li>
                                    <li><label >pharmacy copay:</label>{{$patient->policy->pharmacy_copay}}</li>

                                </ul>
                    </div>

                    </div>

                        </div>
                    </div>
                </td>
            </tr>

        </table>
        </div>
                </div> </div> </div> </div> </div>
@endforeach
    @endsection