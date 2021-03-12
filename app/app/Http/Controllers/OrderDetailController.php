<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderDetailControllerw extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $orderdetail = DB::table('OrderDetail')->get();
       return view('orderdetail.index',compact('orderdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orderdetail.create');
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
            'OC_IDOrder'=>'required',
            'B_BookCode'=>'required',
            'OD_NumberBook'=>'required',
            'OD_ProducPrice'=>'required',
            'OD_TotalPrice'=>'required',
            'OD_Date'=>'required'
        ]);
        DB::table('OrderDetail')->insert([
            'OC_IDOrder'=>$request->OC_IDOrder,
            'B_BookCode'=>$request->B_BookCode,
            'OD_NumberBook'=>$request->OD_NumberBook,
            'OD_ProducPrice'=>$request->OD_ProducPrice,
            'OD_TotalPrice'=>$request->OD_TotalPrice,
            'OD_Date'=>$request->OD_Date
        ]);
        return redirect('orderdetail');
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
        $account = DB::table('OrderDetail')->where('OC_IDOrder','=',$id)->get();
        return view('orderdetail.edit',compact('orderdetail'));
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
            'OC_IDOrder'=>'required',
            'B_BookCode'=>'required',
            'OD_NumberBook'=>'required',
            'OD_ProducPrice'=>'required',
            'OD_TotalPrice'=>'required',
            'OD_Date'=>'required'
        ]);
        DB::table('OrderDetail')->where('OC_IDOrder','=',$id)->update([
            'OC_IDOrder'=>$request->OC_IDOrder,
            'B_BookCode'=>$request->B_BookCode,
            'OD_NumberBook'=>$request->OD_NumberBook,
            'OD_ProducPrice'=>$request->OD_ProducPrice,
            'OD_TotalPrice'=>$request->OD_TotalPrice,
            'OD_Date'=>$request->OD_Date
        ]);
            return redirect('orderdetail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("OrderDetail")->where('OC_IDOrder',"=",$id)->delete();
        return redirect('orderdetail');
    }
}