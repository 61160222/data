@extends('OCtype.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <div>
                    <a class="btn btn-primary" href="{{ route('Home') }}">Home</a>
                    <a class="btn btn-primary" href="{{ route('Order.OrderDetail') }}">OrderDatail</a>
                </div>
                    <table border=1>
                    <!-- OrderConfirmation -->
                        <tr>
                        <tr>
                            <td>OrderNumber</td>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Telphephon</td>
                            <td>E-mail</td>
                        </tr>
                        @foreach($OrderConfirmation as $OC)
                        <tr>
                            <td>{{ $OC->OC_OrderNumber }}</td>
                            <td>{{ $OC->Mem_ID }}</td>
                            <td>{{ $OC->Mem_Name }}</td>
                            <td>{{ $OC->Mem_Address }}</td>
                            <td>{{ $OC->Mem_Telphephon }}</td>
                            <td>{{ $OC->Mem_Email }}</td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection