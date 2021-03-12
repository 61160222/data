<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TransferControllerw extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $transfer = DB::table('Transfer')->get();
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
            'OC_OrderID'=>'required',
            'TF_Date'=>'required',
            'TF_Bank'=>'required',
            'TF_Branch'=>'required',
            'TF_Amuont'=>'required'
        ]);
        DB::table('Transfer')->insert([
            'OC_OrderID'=>$request->OC_OrderID,
            'TF_Date'=>$request->TF_Date,
            'TF_Bank'=>$request->TF_Bank,
            'TF_Branch'=>$request->TF_Branch,
            'TF_Amuont'=>$request->TF_Amuont
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
        $account = DB::table('Transfer')->where('OC_OrderID','=',$id)->get();
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
            'OC_OrderID'=>'required',
            'TF_Date'=>'required',
            'TF_Bank'=>'required',
            'TF_Branch'=>'required',
            'TF_Amuont'=>'required'
        ]);
        DB::table('Transfer')->where('OC_OrderID','=',$id)->update([
            'OC_OrderID'=>$request->OC_OrderID,
            'TF_Date'=>$request->TF_Date,
            'TF_Bank'=>$request->TF_Bank,
            'TF_Branch'=>$request->TF_Branch,
            'TF_Amuont'=>$request->TF_Amuont
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
        DB::table("Transfer")->where('OC_OrderID',"=",$id)->delete();
        return redirect('transfer');
    }
}