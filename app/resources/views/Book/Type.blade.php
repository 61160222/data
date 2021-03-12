@extends('Book.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <table border=1>
                        <tr>
                            <td>CodeBook</td>
                            <td>BoookTypeCode</td>
                            <td>Details</td>
                            <td>Stock</td>
                            <td>Price</td>
                            <td>Note</td>
                        </tr>
                        @foreach($Book as $B)
                        <tr>
                            <td>{{ $B->BT_Code }}</td>
                            <td>{{ $B->BT_BTCode }}</td>
                            <td>{{ $B->B_Details }}</td>
                            <td>{{ $B->B_Stock }}</td>
                            <td>{{ $B->B_Price }}</td>
                            <td>{{ $B->B_Note }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection