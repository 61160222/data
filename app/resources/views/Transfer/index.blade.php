@extends('Transfer.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <table border=1>
                        <tr>
                            <td>OrderID</td>
                            <td>Date</td>
                            <td>Choose a bank</td>
                            <td>Branch</td>
                            <td>Amuont</td>
                        </tr>
                        @foreach($Transfer as $TF)
                        <tr>
                            <td>{{ $TF->OC_OrderID }}</td>
                            <td>{{ $TF->TF_Date }}</td>
                            <td>{{ $TF->TF_Bank }}</td>
                            <td>{{ $TF->TF_Branch }}</td>
                            <td>{{ $TF->TF_Amuont }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection