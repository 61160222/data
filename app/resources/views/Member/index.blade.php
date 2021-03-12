@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <div>
                    <a class="btn btn-primary" href="{{ route('Home') }}">Home</a>
                    <a class="btn btn-primary" href="">โอนเงิน</a>
                    <a class="btn btn-primary" href="{{ route('Order.index') }}">Confirmation</a>
                </div>
                <table border=1>
                    <tr>
                        <td>ID</td>
                        <td>Username</td>
                        <td>Name</td>
                        <td>Address</td>
                        <td>BirthDate</td>
                        <td>Telphephon</td>
                        <td>E-mail</td>
                        <td>IDCard</td>
                        <td>Operation</td>

                    </tr>
                    @foreach($member as $Mem)
                    <tr>
                        <td>{{ $Mem->Mem_ID }}</td>
                        <td>{{ $Mem->Mem_Username }}</td>
                        <td>{{ $Mem->Mem_Name }}</td>
                        <td>{{ $Mem->Mem_Address }}</td>
                        <td>{{ $Mem->Mem_BirthDate }}</td>
                        <td>{{ $Mem->Mem_Telphephon }}</td>
                        <td>{{ $Mem->Mem_Email }}</td>
                        <td>{{ $Mem->Mem_IDCard }}</td>
                        <td>
                            <form action="{{  route('member.destroy',$Mem->Mem_ID) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route ('member.edit',$Mem->Mem_ID) }}">Edit</a>
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection