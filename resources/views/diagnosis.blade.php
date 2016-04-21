
@extends('layouts.app')

@section('content')
	<h1>Diagnosis</h1>
		<div class="container">
            <table class="table table-striped">
                <thread>
                    <tr>
                    	<th>ID</th>
                    	<th>Diagnosis Name</th>
                    </tr>
                </thread> 
            <tbody> 
        @foreach($diagnosis as $id => $diagnosisa)
        <tr> 
        <td>{{$diagnosisa->id}}</td>
        <td>{{$diagnosisa->diagnosis_name}}</td>
        </tr> 
	@endforeach 
		</tbody> 
	</table> 
</div>   

@endsection