<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ogrenciler;

class OgrenciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ogrenciler = ogrenciler::orderBy('created_at','desc')->get();
        $activemenu=4;
        return view('tabs.ogrencileri_goruntule',compact('activemenu','ogrenciler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activemenu=3;
        return view('tabs.ogrenci_ekle',compact('activemenu'));
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
            'adi_soyadi'=>'required',
            'sinifi'=>'required',
            'numarasi'=>'required',
            'puani'=>'required|integer'
        ]);

        ogrenciler::create([
            'adi_soyadi'=>$request->adi_soyadi,
            'sinifi'=>$request->sinifi,
            'numarasi'=>$request->numarasi,
            'puani'=>$request->puani
        ]);
        return redirect()->back()->with('success','Ögrenci Eklendi');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $ogrenci=ogrenciler::find($id);
     $ogrenci->delete();
     return redirect()->back()->with('success','Ögrenci Silindi');
    }
}
