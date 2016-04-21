
@extends('layouts.app')

@section('content')
@if($arrazy)
        <div class="container">
            <div class="row">
                <h1>sql query</h1>

                    <?php $arrayf = array_keys ($arrazy[0] ) ?>
                <div class="col-md-10 col-md-offset-1">




                            <div class="container">

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        @foreach($arrayf as &$value)
                                        <th><?php echo $value ?></th>
                                        @endforeach

                                        </tr>
                                    </thead>
                                    @foreach ($arrazy as $arra)
                                    <tbody>
                                    <tr>
                                        @foreach($arra as &$valuae)
                                        <td>{{$valuae}}</td>
                                        @endforeach

                                    </tr>

                                    </tbody>
                                    @endforeach

                                </table>
                            </div>




                        </div>


                        </table>
                    </div>
                </div> </div></div>


        </div> </div>

    @else
    <h1>no entries</h1>
    @endif
@endsection