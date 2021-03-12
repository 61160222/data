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
       $book = DB::table('BookType')->get();
       return view('booktype.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booktype.create');
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
            'BT_Name'=>'required'
        ]);
        DB::table('Book')->insert([
            'BT_Code'=>$request->BT_Code,
            'BT_Name'=>$request->BT_Name
        ]);
        return redirect('booktype');
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
        $account = DB::table('BookType')->where('BT_Code','=',$id)->get();
        return view('booktype.edit',compact('booktype'));
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
            'BT_Name'=>'required'
        ]);
        DB::table('BookType')->where('BT_Code','=',$id)->update([
            'BT_Code'=>$request->BT_Code,
            'BT_Name'=>$request->BT_Name
        ]);
            return redirect('booktype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("BookType")->where('BT_Code',"=",$id)->delete();
        return redirect('booktype');
    }
}