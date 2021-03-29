@extends('Transfer.layout')

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200;500&family=Prompt:wght@300;400&display=swap"
    rel="stylesheet">

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <font face="Prompt">
                    <br><br>
                    <div align="center">
                        <label for="page">Choose a page :</label>
                        <select name="forma" onchange="location = this.value;">
                            <option value="">- Choose -</option>
                            <option value="member">Member</option>
                            <option value="book">Book</option>
                            <option value="order">Order</option>
                        </select>
                        <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <label for="about">Choose a about :</label>
                        <select name="forma" onchange="location = this.value;">
                            <option value="">- About -</option>
                            <option value="order">Order</option>
                            <option value="orderdetail">Order Detail</option>
                            <option value="transfer">Transfer</option>
                        </select>
                    </div>
                    <br><br>
                    <table border=1 align="center">
                        <font size=7><B><u>Transfer</u></B></font>
                        <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a class="btn btn-primary" href="{{ route('transfer.create') }}">Create Book</a>
                        <br><br>

                        <tr align="center">
                            <td width="150">TransferOrder</td>
                            <td width="200">Date</td>
                            <td width="200">Choose a bank</td>
                            <td width="150">Branch</td>
                            <td width="150">Total balance</td>
                            <td width="100">Operation</td>
                        </tr>
                        @foreach($transfer as $TF)
                        <tr align="center">
                            <td>{{ $TF->TransferOrder }}</td>
                            <td>{{ $TF->TransferDate }}</td>
                            <td>{{ $TF->BankName }}</td>
                            <td>{{ $TF->BankBranch }}</td>
                            <td>{{ $TF->TotalBalance }}</td>
                            <td>
                                <form action="{{ route('transfer.destroy',$TF->TransferOrder) }}" method="POST">
                                    <a href="{{ route('transfer.edit',$TF->TransferOrder) }}"><i class='fas fa-edit'></i></a>
                                    <a>&nbsp;</a>
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit"><i class='fas fa-cut'></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </font>
            </div>
        </div>
    </div>
</div>
@endsection