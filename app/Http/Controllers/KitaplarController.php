<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kitaplar;

class KitaplarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitaplar = kitaplar::orderBy('created_at','desc')->get();
        $activemenu=2;
        return view('tabs.kitap_listesi',compact('activemenu','kitaplar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activemenu=1;
        return view('tabs.kitap_ekle',compact('activemenu'));
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
            'kitap_adi'=>'required',
            'kitap_yazari'=>'required',
            'sayfa_numarasi'=>'required|integer',
            'süre_siniri'=>'required'
        ]);

        kitaplar::create([
            'kitap_adi'=>$request->kitap_adi,
            'kitap_yazari'=>$request->kitap_yazari,
            'sayfa_numarasi'=>$request->sayfa_numarasi,
            'süre_siniri'=>$request->süre_siniri
        ]);
        return redirect()->back()->with('success','Kitap Eklendi');
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
        $kitap=kitaplar::find($id);
        $kitap->delete();
        return redirect()->back()->with('success','Kitap Silindi');
    }
}
