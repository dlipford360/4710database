@extends('layouts.app')

@section('content')
    <h1>Invoices</h1>

        <div class="container">
            <table class="table table-striped">
                <thread>
                    <tr>
                        <th>ID</th>
                        <th>Bill Date</th>
                        <th>Due Date</th>
                        <th>Amount Paid</th>
                    </tr>
                </thread>
            <tbody>
        @foreach($invoices as $id => $invoice)
                <tr>
                <td>{{$invoice->id}}</td>
                <td>{{$invoice->bill_date}}</td>
                <td>{{$invoice->due_date}}</td>
                <td>{{$invoice->amount_paid}}</td>
                </tr>
    @endforeach
            </tbody>
        </table>
    </div>
@endsection