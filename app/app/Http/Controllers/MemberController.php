<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MemberControllerw extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $member = DB::table('Member')->get();
       return view('member.index',compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
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
            'Mem_Username'=>'required',
            'Mem_Name'=>'required',
            'Mem_Address'=>'required',
            'Mem_BirthDate'=>'required',
            'Mem_Telphephon'=>'required',
            'Mem_Email'=>'required',
            'Mem_IDCard'=>'required'
        ]);
        DB::table('Member')->insert([
            'Mem_ID'=>$request->Mem_ID,
            'Mem_Username'=>$request->Mem_Username,
            'Mem_Name'=>$request->Mem_Name,
            'Mem_Address'=>$request->Mem_Address,
            'Mem_BirthDate'=>$request->Mem_BirthDate,
            'Mem_Telphephon'=>$request->Mem_Telphephon,
            'Mem_Email'=>$request->Mem_Email,
            'Mem_IDCard'=>$request->Mem_IDCard
        ]);
        return redirect('member');
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
        $account = DB::table('Member')->where('Mem_ID','=',$id)->get();
        return view('member.edit',compact('member'));
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
            'Mem_Username'=>'required',
            'Mem_Name'=>'required',
            'Mem_Address'=>'required',
            'Mem_BirthDate'=>'required',
            'Mem_Telphephon'=>'required',
            'Mem_Email'=>'required',
            'Mem_IDCard'=>'required'
        ]);
        DB::table('Member')->where('Mem_ID','=',$id)->update([
            'Mem_ID'=>$request->Mem_ID,
            'Mem_Username'=>$request->Mem_Username,
            'Mem_Name'=>$request->Mem_Name,
            'Mem_Address'=>$request->Mem_Address,
            'Mem_BirthDate'=>$request->Mem_BirthDate,
            'Mem_Telphephon'=>$request->Mem_Telphephon,
            'Mem_Email'=>$request->Mem_Email,
            'Mem_IDCard'=>$request->Mem_IDCard
        ]);
            return redirect('member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("Member")->where('Mem_ID',"=",$id)->delete();
        return redirect('member');
    }
}