@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    {!! Form::open(['method'=>'POST', 'action' => 'fourseventencontroller@store'   ]) !!}
                    {!! Form::label('sqlquery', 'Sql Query') !!}
                    {!! Form::text('sqlquery' , null, ['class' => 'form-control', 'placeholder'=>'type sql query here']) !!}
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
                    {!! Form::close() !!}

                </div>
                <h2>Relations</h2>
                <a href='4710/patients'> patients and their associated policy</a><br>
                <a href='4710/invoices'> invoices</a><br>
                <a href='4710/patientvisits'> patient visits</a><br>
                <a href='4710/diagnosis'> diagnosis</a><br>
                <a href='4710/diagnosisnote'>diagnosis note </a><br>
                <a href='4710/drug'>drug </a><br>
                <a href='4710/drugscript'>drugs cript </a><br>
                <a href='4710/medicalpersciption'>medical perscription </a><br>
                <a href='4710/payment'>payment </a><br>
                <a href='4710/procedure'>procedure </a><br>
                <a href='4710/procedurenote'>procedure note </a><br>
                <a href='4710/referral'>referral </a><br>
                <a href='4710/room'>room </a><br>
                <a href='4710/service'>service</a><br>
                <a href='4710/staff'>staff </a><br>
                <a href='4710/test'>test </a><br>

            </div>
        </div>
    </div>
</div>
@endsection
