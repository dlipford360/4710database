@extends('layouts.app')

@section('content')
	<h1>Diagnosis Note</h1> 

	<div class="container">
		<table class="table table-striped">
			<thread>
				<tr> 
					<th>ID</th> 
					<th>Diagnosis ID</th>
					<th>Date of Onset</th>
					<th>Symptoms</th>
					<th>Severity</th>
					<th>Prognosis</th>
					<th>Patient Visit ID</th>
				</tr>
			</thread>
		<tbody> 
	@foreach($diagnosisnote as $id => $diagnosisnotea)
		<tr>
		<td>{{$diagnosisnotea->id}}</td>
		<td>{{$diagnosisnotea->diagnosis_id}}</td>
		<td>{{$diagnosisnotea->date_of_onset}}</td>
		<td>{{$diagnosisnotea->symptoms}}</td>
		<td>{{$diagnosisnotea->severity}}</td>
		<td>{{$diagnosisnotea->prognosis}}</td>
		<td>{{$diagnosisnotea->patientvisit_id}}</td>
		</tr>
	@endforeach
			</tbody>
		</table> 
	</div>
@endsection