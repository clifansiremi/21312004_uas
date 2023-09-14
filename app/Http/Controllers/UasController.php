<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uas;

class UasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $uas = Uas::all();
       return view('uas.index',compact('uas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Uas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uas = new Uas;

        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'alamat' => 'required',
        ]);

        $uas->nama = $request->nama;
        $uas->npm = $request->npm;
        $uas->alamat = $request->alamat;
        $uas->save();

        return redirect('/uas');
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
        $uas = Uas::where('id',$id)->first();

        return view('uas.edit', compact('uas'));
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
            'nama' => 'required',
            'npm' => 'required',
            'alamat' => 'required',
        ]);

        $uas = Uas::find($id);
        $uas->nama = $request->nama;
        $uas->npm = $request->npm;
        $uas->alamat = $request->alamat;
        $uas->save();

        return redirect('/uas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uas = Uas::find($id);
        $uas -> delete();
    }
}
