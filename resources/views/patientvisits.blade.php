
@extends('layouts.app')

@section('content')

    @foreach($patientvisits as $id => $patientvisit)
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <table class="table table-striped table-responsive" style="table-layout:fixed">
                                <tr>

                                    <td><label  style="width: 22%; display:inline-block"><a> {{$patientvisit->patient->name}}</a></label></td>


                                </tr>
                            </table>

                            <table width="100%">
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div>
                                                <div class="col-md-6"  >
                                                    <ul class="list-unstyled">
                                                        <li><label  >Patient visit: </label>{{$patientvisit->id}}</li>

                                                        <li><label>phone:</label> {{$patientvisit->visit_date}}</li>
                                                        <li><label>date of birth:</label> {{$patientvisit->visit_time}}</li>
                                                        <li><label  >relationship to insured:</label>{{$patientvisit->duration}}</li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">

                                                        <li><label >reason:</label>{{$patientvisit->reason}}</li>

                                                        <li><label >room condition:</label>{{$patientvisit->room_condition}}</li>
                                                        <li><label >room Number:</label>{{$patientvisit->room->id}}</li>
                                                        <li><label >room type:</label>{{$patientvisit->room->roomtype}}</li>

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