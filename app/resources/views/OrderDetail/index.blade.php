@extends('OrderDetail.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <table border=1>
                        <tr>
                            <td>OrderNumber</td>
                            <td>Total Unit</td>
                            <td>Total Price</td>
                            <td>Date Order</td>
                        </tr>
                        @foreach($orderdetail as $OD)
                        <tr>
                            <td>{{ $OR->OrderNumber }}</td>
                            <td>{{ $OD->TUnit }}</td>
                            <td>{{ $OD->TPrice }}</td>
                            <td>{{ $OD->DateOrder }}</td>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection