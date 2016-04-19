@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    {!! Form::open(['url'=>'index2' ]) !!}
                    {!! Form::label('sqlquery', 'Sql Query') !!}
                    {!! Form::text('sqlquery' , null, ['class' => 'form-control', 'placeholder'=>'type sql query here']) !!}
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
