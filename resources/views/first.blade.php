@extends('layouts.app')

@section('content')
<h1>Patients + Policy</h1>

    <div class="container">
        <table class="table table-striped">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>RTI</th>
                    <th>Invoice ID</th>
                    <th>Company</th>
                    <th>Medical Copay</th>
                    <th>Lab Copay</th>
                    <th>Pharmacy Copay</th>
                </tr>
            </thread>
        </tbody>
        @foreach($patients as $id => $patient)
            <tr>
                <td>{{$patient->id}}</td>
                <td>{{$patient->phone}}</td>
                <td>{{$patient->dob}}</td>
               <td>{{$patient->relationship_to_insured}}</td>
                <td>{{$patient->policy->id}}</td>
                <td>{{$patient->policy->policy_type}}</td>
                <td>{{$patient->policy->medical_copay}}</td>
                <td>{{$patient->policy->lab_copay}}</td>
                <td>{{$patient->policy->pharmacy_copay}}</td>
            </tr>
    @endforeach
        </tbody>
    </table>
</div>
    @endsection