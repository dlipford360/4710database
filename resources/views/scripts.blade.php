
@extends('layouts.app')

@section('content')
	<h1>Order Scripts by Quantity, Descending</h1>
		<div class="container">
            <table class="table table-striped">
                <thread>
                    <tr>
                    	<th>ID</th>
                    	<th>Drug ID</th>
                        <th>Refills</th>
                        <th>Quantity</th>
                        <th>Instructions</th>
                    </tr>
                </thread> 
            <tbody> 
        @foreach($scripts as $id => $scriptsa)
        <tr> 
        <td>{{$scriptsa->id}}</td>
        <td>{{$scriptsa->drug_id}}</td>
        <td>{{$scriptsa->num_refills}}</td>
        <td>{{$scriptsa->qty}}</td>
        <td>{{$scriptsa->instructions}}</td>
        </tr> 
	@endforeach 
		</tbody> 
	</table> 
</div>   

@endsection