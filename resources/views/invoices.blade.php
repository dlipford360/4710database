@extends('layouts.app')

@section('content')
    <h1>invoices</h1>

    @foreach($invoices as $id => $invoice)
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <table class="table table-striped table-responsive" style="table-layout:fixed">
                                <tr>



                                </tr>
                            </table>

                            <table width="100%">
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div>
                                                <div class="col-md-6"  >
                                                    <ul class="list-unstyled">

                                                        <li><label  >id:</label> {{$invoice->id}}</li>
                                                        <li><label>bill date:</label> {{$invoice->bill_date}}</li>
                                                        <li><label>due date:</label> {{$invoice->due_date}}</li>
                                                        <li><label  >amount paid:</label>${{$invoice->amount_paid}}</li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">




                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                        </div>
                        </td>
                        </tr>

                        </table>
                    </div>
                </div> </div> </div> </div> </div>
    @endforeach
@endsection