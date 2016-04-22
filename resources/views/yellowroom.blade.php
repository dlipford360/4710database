
@extends('layouts.app')

@section('content')
    <h1>Patient Visits Where Room Is Yellow</h1> 

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
   @foreach($yellow as $id => $yellowa)
        <tr>
        <!-- <td>{{$yellowa->id}}</td>
        <td>{{$yellowa->visit_date}}</td>
        <td>{{$yellowa->visit_time}}</td>
        <td>{{$yellowa->duration}}</td>
        <td>{{$yellowa->reason}}</td>
        <td>{{$yellowa->room_condition}}</td> -->

        </tr>
    @endforeach
        </tbody>
    </table>
</div>
@endsection