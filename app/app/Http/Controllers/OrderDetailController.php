<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderDetailController extends Controller
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
            'OrderNumber'=>'required',
            'TUnit'=>'required',
            'TPrice'=>'required',
            'DateOrder'=>'required',
        ]);
        DB::table('OrderDetail')->insert([
            'OrderNumber'=>$request->OrderNumber,
            'TUnit'=>$request->TUnit,
            'TPrice'=>$request->TPrice,
            'DateOrder'=>$request->DateOrder
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
        $account = DB::table('OrderDetail')->where('OrderNumber','=',$id)->get();
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
            'OrderNumber'=>'required',
            'TUnit'=>'required',
            'TPrice'=>'required',
            'DateOrder'=>'required',
        ]);
        DB::table('OrderDetail')->where('OrderNumber','=',$id)->update([
            'OrderNumber'=>$request->OrderNumber,
            'TUnit'=>$request->TUnit,
            'TPrice'=>$request->TPrice,
            'DateOrder'=>$request->DateOrder
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
        DB::table("OrderDetail")->where('OrderNumber',"=",$id)->delete();
        return redirect('orderdetail');
    }
}