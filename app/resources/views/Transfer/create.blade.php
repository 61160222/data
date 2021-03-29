@extends('Transfer.layout')

@section('content')

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200;500&family=Prompt:wght@300;400&display=swap"
    rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <font face="Prompt">
                    <br><br>
                    <font size=7><B>Create Transfer</B></font><br>
                    <form action="{{ route('transfer.store') }}" method="POST">
                        @csrf
                        <table height="400" width="800">
                            <tr>
                                <td border=1> Transfer Order : </td>
                                <td><input type=text name=TransferOrder style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Transfer Date : </td>
                                <td><input type=date name=TransferDate style="width:500px;"></td>
                            </tr>
                            <tr> 
                                <td><label for="bank"> Bank Name :</label></td>
                                <td><select name=BankName id="bank" style="width:500px;">
                                        <option value="">- Choose -</option>
                                        <option value="SCB">SCB</option>
                                        <option value="BOTH">BOTH</option>
                                        <option value="BBL">BBL</option>
                                        <option value="KTB">KTB</option>
                                        <option value="KBANK">KBANK</option>
                                        <option value="TMB">TMB</option>
                                        <option value="UOBT">UOBT</option>
                                        <option value="BAAC">BAAC</option>
                                        <option value="GSB">GSB</option>
                                        <option value="ISBT">ISBT</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> Bank Branch : </td>
                                <td><input type=text name=BankBranch style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Balance : </td>
                                <td><input type=text name=TotalBalance style="width:500px; "></td>
                            </tr>
                            <tr align="center">
                                <td colspan=2>
                                    <button class="btn btn-primary" href="{{ route('transfer.index') }}">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </font>
            </div>
        </div>
    </div>
</div>
@endsection