@extends('OCtype.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div>
                        <a class="btn btn-primary" href="{{ route('Home') }}">Home</a>
                        <a class="btn btn-primary" href="{{ route('Order.OrderConfirmation') }}">Back</a>
                    </div>
                    <table border=1>
                        <!-- OrderConfirmation -->
                        <tr>
                        <tr>
                            <td>OrderNumber</td>
                            <td>BookCode</td>
                            <td>Amount</td>
                            <td>Unit price</td>
                            <td>Total</td>
                            <td>Date Order</td>
                        </tr>
                        @foreach($OrderDatail as $OD)
                        <tr>
                            <td>{{ $OD->OC_IDOrder }}</td>
                            <td>{{ $OD->B_BookCode }}</td>
                            <td>{{ $OD->OD_NumberBook }}</td>
                            <td>{{ $OD->OD_ProducPrice }}</td>
                            <td>{{ $OD->OD_TotalPrice }}</td>
                            <td>{{ $OD->OD_Date }}</td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection