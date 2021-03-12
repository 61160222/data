<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderConfirmationControllerw extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $orderconfirmation = DB::table('OrderConfirmation')->get();
       return view('orderconfirmation.index',compact('orderconfirmation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orderconfirmation.create');
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
            'OC_OrderNumber'=>'required',
            'Mem_ID'=>'required',
            'Mem_Name'=>'required',
            'Mem_Address'=>'required',
            'Mem_Telphephon'=>'required',
            'Mem_Email'=>'required'
        ]);
        DB::table('OrderConfirmation')->insert([
            'OC_OrderNumber'=>$request->OC_OrderNumber,
            'Mem_ID'=>$request->Mem_ID,
            'Mem_Name'=>$request->Mem_Name,
            'Mem_Address'=>$request->Mem_Address,
            'Mem_Telphephon'=>$request->Mem_Telphephon,
            'Mem_Email'=>$request->Mem_Email
        ]);
        return redirect('orderconfirmation');
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
        $account = DB::table('OrderConfirmation')->where('OC_OrderNumber','=',$id)->get();
        return view('orderconfirmation.edit',compact('orderconfirmation'));
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
            'OC_OrderNumber'=>'required',
            'Mem_ID'=>'required',
            'Mem_Name'=>'required',
            'Mem_Address'=>'required',
            'Mem_Telphephon'=>'required',
            'Mem_Email'=>'required'
        ]);
        DB::table('OrderConfirmation')->where('OC_OrderNumber','=',$id)->update([
            'OC_OrderNumber'=>$request->OC_OrderNumber,
            'Mem_ID'=>$request->Mem_ID,
            'Mem_Name'=>$request->Mem_Name,
            'Mem_Address'=>$request->Mem_Address,
            'Mem_Telphephon'=>$request->Mem_Telphephon,
            'Mem_Email'=>$request->Mem_Email
        ]);
            return redirect('orderconfirmation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("OrderConfirmation")->where('OC_OrderNumber',"=",$id)->delete();
        return redirect('orderconfirmation');
    }
}