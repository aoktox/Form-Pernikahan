<?php

namespace App\Http\Controllers;

use App\Provinsi;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'provinsi'=> Provinsi::all(),
        ];
        return view('page.daftar',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Submit(Request $request)
    {
        //dd($request->suami['nik']);
        dd($request->all());
        $dataSuami = $request->suami;
        $dataAyahSuami = $request->AyahSuami;
        $dataIbuSuami = $request->IbuSuami;
        $dataIstri = $request->istri;
        $dataAyahIstri = $request->AyahIstri;
        $dataIbuIstri = $request->IbuIstri;
        $dataSaksiI = $request->SaksiI;
        $dataSaksiII = $request->SaksiII;
        $DataPerkawinan = $request->DataPerkawinan;
        $dataDoc = $request->doc;
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
        //
    }
}
