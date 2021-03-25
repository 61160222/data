<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $order = DB::table('Order')
        ->join('member','member.Mem_ID','=','order.Mem_ID')
        ->join('book','book.BookCode','=','order.BookCode')
        ->get();
        return view('order.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
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
            'Mem_ID'=>'required',
            'OrderNumber'=>'required',
            'BookCode'=>'BookCode',
            'BookName'=>'required',
            'BookPrice'=>'required',
            'OrderUnit'=>'required'
        ]);
        DB::table('Order')->insert([
            'Mem_ID'=>'required',
            'OrderNumber'=>$request->OrderNumber,
            'BookCode'=>$request->BookCode,
            'BookName'=>$request->BookName,
            'BookPrice'=>$request->BookPrice,
            'OrderUnit'=>$request->OrderUnit
        ]);
        return redirect('order');
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
        $account = DB::table('Order')->where('OrderNumber','=',$id)->get();
        return view('order.edit',compact('order'));
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
            'Mem_ID'=>'required',
            'OrderNumber'=>'required',
            'BookCode'=>'BookCode',
            'BookName'=>'required',
            'BookPrice'=>'required',
            'OrderUnit'=>'required'
        ]);
        DB::table('Order')->where('OrderNumber','=',$id)->update([
            'Mem_ID'=>'required',
            'OrderNumber'=>$request->OrderNumber,
            'BookCode'=>$request->BookCode,
            'BookName'=>$request->BookName,
            'BookPrice'=>$request->BookPrice,
            'OrderUnit'=>$request->OrderUnit
        ]);
            return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("Order")->where('OrderNumber',"=",$id)->delete();
        return redirect('order');
    }
}