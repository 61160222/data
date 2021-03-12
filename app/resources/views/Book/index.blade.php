@extends('BookType.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <table border=1>
                        <tr>
                            <td>BookTypeCode</td>
                            <td>TypeName</td>
                        </tr>
                        @foreach($BookType as $BT)
                        <tr>
                            <td>{{ $BT->BT_Code }}</td>
                            <td>{{ $BT->BT_Name }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection