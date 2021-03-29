<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $transfer = DB::table('Transfer')
       ->join('order','order.OrderNumber','=','transfer.TransferOrder')
       ->get();
       return view('transfer.index',compact('transfer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transfer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'TransferOrder'=>'required',
            'TransferDate'=>'required',
            'BankName'=>'required',
            'BankBranch'=>'required',
            'TotalBalance'=>'required'
        ]);
        DB::table('Transfer')->insert([
            'TransferOrder'=>$request->TransferOrder,
            'TransferDate'=>$request->TransferDate,
            'BankName'=>$request->BankName,
            'BankBranch'=>$request->BankBranch,
            'TotalBalance'=>$request->TotalBalance
        ]);
        return redirect('transfer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transfer = DB::table('Transfer')->where('TransferOrder','=',$id)->get();
        return view('transfer.edit',compact('transfer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'TransferOrder'=>'required',
            'TransferDate'=>'required',
            'BankName'=>'required',
            'BankBranch'=>'required',
            'TotalBalance'=>'required'
        ]);
        DB::table('Transfer')->where('TransferOrder','=',$id)->update([
            'TransferOrder'=>$request->TransferOrder,
            'TransferDate'=>$request->TransferDate,
            'BankName'=>$request->BankName,
            'BankBranch'=>$request->BankBranch,
            'TotalBalance'=>$request->TotalBalance
        ]);
            return redirect('transfer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("Transfer")->where('TransferOrder',"=",$id)->delete();
        return redirect('transfer');
    }
}