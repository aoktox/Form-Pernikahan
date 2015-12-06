<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Istri;
use App\Pendidikan;
use App\Provinsi;
use App\StatusKawin;
use App\Suami;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //private $unikKey;

    public function index()
    {
        $this->unikKey="NKH_".date("ymdHis");
        $data=[
            'provinsi'=> Provinsi::all(),
            'agama' => Agama::all(),
            'status' => StatusKawin::all(),
            'pendidikan' => Pendidikan::all()
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
    private function uploadDoc($file,$path){
        $index = [
            'ktpSuami' => 'KTP_Suami',
            'ktpIstri' => 'KTP_Istri',
            'sk' => 'SK_Desa',
            'foto' => 'Foto_Suami_Istri',
            'aktaSUami' => 'Akta_Suami',
            'aktaIstri' => 'Akta_Istri',
            'aktaCerai' => 'Akta_Perceraian_Kematian',
            'skABRI' => 'Surat_Izin_Kawin_dari_komandan',
            'janji' => 'Surat_Perjanjian_Kawin',
            'skAgama' => 'SK_Penghayat_Kepercayaan'
        ];
        foreach($index as $i){
            $key = array_search($i, $index);
            if($file[$key]==null){
                break;
            }
            else{
                $name=$i.'.'.$file[$key]->getClientOriginalExtension();
                $file[$key]->move($path,$name);
//                echo "<pre>";
//                echo $file[$key]->getClientOriginalName();
//                echo "<br/>";
//                echo $name;
//                echo "<pre>";
            }
        }
        //dd($this->unikKey);
    }
    public function Submit(Request $request)
    {
        $path=storage_path('Doc').'/'.$this->unikKey.'/';

        //dd($request->all());
        $dataSuami = $request->suami;
        $dataSuami['tglLhr']= Carbon::createFromFormat('m/d/Y',$dataSuami['tglLhr'])->format('Y-m-d');
        $dataAyahSuami = $request->AyahSuami;

        $dataIbuSuami = $request->IbuSuami;
        $dataIstri = $request->istri;
        $dataAyahIstri = $request->AyahIstri;
        $dataIbuIstri = $request->IbuIstri;
        $dataSaksiI = $request->SaksiI;
        $dataSaksiII = $request->SaksiII;
        $DataPerkawinan = $request->DataPerkawinan;
        //$dataDoc = $request->doc;

        //$name=$request->file('doc.ktpSuami')->getClientOriginalName();
        //$request->file('doc.ktpSuami')->move($path,$name);

        //Storage::put('file.png', $request->file('doc.ktpSuami'));
        $this->uploadDoc($request->file('doc'),$path);
        //dd($request->file('doc'));
        //$date = Carbon::createFromFormat('d/m/Y',$dataSuami['tglLhr']);
        //dd($date->format('Y-m-d'));
        //dd($dataSuami['tglLhr']);
        dd($request->all());
        Suami::create($dataSuami);
        dd($request->all());
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

    public function cetak(){
        return view('cetak');
    }
}
