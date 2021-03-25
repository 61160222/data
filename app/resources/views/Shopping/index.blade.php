@extends('Shopping.layout')

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
                            <option value="member">Member</option>
                            <option value="shopping">Shopping</option>
                        </select>
                    </div>
                    <br><br>
                    <table border=1 align="center">
                        <font size=7><B><u>Shopping</u></B></font>
                        <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <!-- <a class="btn btn-primary" href="{{ route('shopping.create') }}">Create Member</a> -->
                        <br><br>
                        <tr align="center">
                            <td width="100">MemberID</td>
                            <td width="200">Name</td>
                            <td width="300">Address</td>
                            <td width="300">E-mail</td>
                            <td width="150">Telphephon</td>
                            <td width="100">Operation</td>

                        </tr>
                        @foreach($shopping as $SP)
                        <tr align="center">
                            <td>{{ $SP->Mem_ID }}</td>
                            <td>{{ $SP->Name }}</td>
                            <td>{{ $SP->Address }}</td>
                            <td>{{ $SP->Email }}</td>
                            <td>{{ $SP->Telphephon }}</td>
                            <td>
                                <form action="{{ route('shopping.destroy',$SP->Mem_ID) }}" method="POST">
                                    <!-- <a href="{{ route('shopping.edit',$SP->Mem_ID) }}"><i class='fas fa-edit'></i></a>
                                    <a>&nbsp;</a> -->
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