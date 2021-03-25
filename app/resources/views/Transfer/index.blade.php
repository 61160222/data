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
                            <td>Total balance</td>
                        </tr>
                        @foreach($transfer as $TF)
                        <tr>
                            <td>{{ $TF->TransferOrder }}</td>
                            <td>{{ $TF->TransferDate }}</td>
                            <td>{{ $TF->BankName }}</td>
                            <td>{{ $TF->BankBranch }}</td>
                            <td>{{ $TF->TotalBalance }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection