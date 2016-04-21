
@extends('layouts.app')

@section('content')
    <h1>Patient Visits</h1> 

    <div class="container">
    <table class="table table-striped">
        <thread>
            <tr>
                <th>ID</th>
                <th>Visit Date</th>
                <th>Visit Time</th>
                <th>Duration</th>
                <th>Reason</th>
                <th>Room Condition</th>
                <th>Room ID</th>
                <th>Room Type</th>
            </tr>
            </thread>
        <tbody>
    @foreach($patientvisits as $id => $patientvisit)
        <tr>
        <td>{{$patientvisit->id}}</td>
        <td>{{$patientvisit->visit_date}}</td>
        <td>{{$patientvisit->visit_time}}</td>
        <td>{{$patientvisit->duration}}</td>
        <td>{{$patientvisit->reason}}</td>
        <td>{{$patientvisit->room_condition}}</td>
        <td>{{$patientvisit->room->id}}</td>
        <td>{{$patientvisit->room->roomtype}}</td>
        </tr>
    @endforeach
        </tbody>
    </table>
</div>
@endsection