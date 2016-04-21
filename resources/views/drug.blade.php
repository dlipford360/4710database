@extends('layouts.app')

@section('content')
	<h1>Drug Name</h1> 

	<div class="container">
		<table class="table table-striped">
			<thread>
				<tr> 
					<th>ID</th> 
					<th>Drug Name</th>
				</tr>
			</thread>
		<tbody> 
	@foreach($drug as $id => $druga)
		<tr>
		<td>{{$druga->id}}</td>
		<td>{{$druga->drug_name}}</td>
		</tr>
	@endforeach
			</tbody>
		</table> 
	</div>
@endsection