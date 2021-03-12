@extends('layouts.app')

@section('content')
@foreach($member as $mem)
@endforeach

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div>
                        Edit Member
                    </div>
                    <form action="{{ route('Member.update',$mem->Mem_ID) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <table border=1>
                            <tr>
                                <td>ID :</td>
                                <td><input type=text name=Mem_ID value="{{ $mem->Mem_ID }}" readonly></td>
                            </tr>
                            <tr>
                                <td>Username :</td>
                                <td><input type=text name=Mem_Username value="{{ $mem->Mem_Username }}"></td>
                            </tr>
                            <tr>
                                <td>Name :</td>
                                <td><input type=text name=Mem_Name value="{{ $mem->Mem_Name }}"></td>
                            </tr>
                            <tr>
                                <td>Address :</td>
                                <td><input type=text name=Mem_Mem_BirthDate value="{{ $mem->Mem_Mem_BirthDate }}"></td>
                            </tr>
                            <tr>
                                <td>BirthDate :</td>
                                <td><input type=text name=Mem_BirthDate value="{{ $mem->Mem_BirthDate }}"></td>
                            </tr>
                            <tr>
                                <td>Telphephon :</td>
                                <td><input type=text name=Mem_Telphephon value="{{ $mem->SubMem_Email }}"></td>
                            </tr>
                            <tr>
                                <td>E-mail :</td>
                                <td><input type=text name=Mem_Email value="{{ $mem->Mem_Email }}"></td>
                            </tr>
                            <tr>
                                <td>IDCard :</td>
                                <td><input type=text name=Mem_IDCard value="{{ $mem->Mem_IDCard }}"></td>
                            </tr>
                            <td colspan=2>
                                <button type="reset" class="btn btn-primary">Back</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </td>
                            </tr>
                        </table>
                    </form>
                    <div>
                    </div>
                </div>
            </div>
        </div>
        @endsection