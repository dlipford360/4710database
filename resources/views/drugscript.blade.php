@extends('layouts.app')

@section('content')
	<h1>Drug Scripts</h1> 

	<div class="container">
		<table class="table table-striped">
			<thread>
				<tr> 
					<th>ID</th> 
					<th>Drug ID</th>
					<th>Number of Refills</th>
					<th>Quantity</th>
					<th>Instructions</th>
				</tr>
			</thread>
		<tbody> 
	@foreach($drugscript as $id => $drugscripta)
		<tr>
		<td>{{$drugscripta->id}}</td>
		<td>{{$drugscripta->drug_id}}</td>
		<td>{{$drugscripta->num_refills}}</td>
		<td>{{$drugscripta->qty}}</td>
		<td>{{$drugscripta->instructions}}</td>
		</tr>
	@endforeach
			</tbody>
		</table> 
	</div>
@endsection