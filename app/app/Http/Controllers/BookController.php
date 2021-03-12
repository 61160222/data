<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookControllerw extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $book = DB::table('Book')->get();
       return view('book.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
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
            'BT_Code'=>'required',
            'BT_BTCode'=>'required',
            'B_Details'=>'required',
            'B_Stock'=>'required',
            'B_Price'=>'required',
            'B_Note'=>'required'
        ]);
        DB::table('Book')->insert([
            'BT_Code'=>$request->BT_Code,
            'BT_BTCode'=>$request->BT_BTCode,
            'B_Details'=>$request->B_Details,
            'B_Stock'=>$request->B_Stock,
            'B_Price'=>$request->B_Price,
            'B_Note'=>$request->B_Note
        ]);
        return redirect('book');
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
        $account = DB::table('Book')->where('BT_Code','=',$id)->get();
        return view('book.edit',compact('book'));
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
            'BT_Code'=>'required',
            'BT_BTCode'=>'required',
            'B_Details'=>'required',
            'B_Stock'=>'required',
            'B_Price'=>'required',
            'B_Note'=>'required'
        ]);
        DB::table('Book')->where('BT_Code','=',$id)->update([
            'BT_Code'=>$request->BT_Code,
            'BT_BTCode'=>$request->BT_BTCode,
            'B_Details'=>$request->B_Details,
            'B_Stock'=>$request->B_Stock,
            'B_Price'=>$request->B_Price,
            'B_Note'=>$request->B_Note
        ]);
            return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("Book")->where('BT_Code',"=",$id)->delete();
        return redirect('book');
    }
}