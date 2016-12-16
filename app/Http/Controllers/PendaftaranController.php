<?php

namespace App\Http\Controllers;

use App\Agama;
use App\AyahIstri;
use App\AyahSuami;
use App\DataPerkawinan;
use App\IbuIstri;
use App\IbuSuami;
use App\Istri;
use App\Pendaftaran;
use App\Pendidikan;
use App\Provinsi;
use App\SaksiI;
use App\SaksiII;
use App\StatusKawin;
use App\Suami;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $unikKey;

    function __construct()
    {
        $this->unikKey="NKH_".date("ymdHis");
    }

    public function index()
    {
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
        //dd($request->all());
        $path=storage_path('Doc').'/'.$this->unikKey.'/';
        //Suami
        $dataSuami = $request->suami;
        $dataSuami['tglLhr']= Carbon::createFromFormat('m/d/Y',$dataSuami['tglLhr'])->format('Y-m-d');

        $dataAyahSuami = $request->AyahSuami;
        $dataAyahSuami['tglLhr']= Carbon::createFromFormat('m/d/Y',$dataAyahSuami['tglLhr'])->format('Y-m-d');

        $dataIbuSuami = $request->IbuSuami;
        $dataIbuSuami['tglLhr']= Carbon::createFromFormat('m/d/Y',$dataIbuSuami['tglLhr'])->format('Y-m-d');

        //Istri
        $dataIstri = $request->istri;
        $dataIstri['tglLhr']= Carbon::createFromFormat('m/d/Y',$dataIstri['tglLhr'])->format('Y-m-d');

        $dataAyahIstri = $request->AyahIstri;
        $dataAyahIstri['tglLhr']= Carbon::createFromFormat('m/d/Y',$dataAyahIstri['tglLhr'])->format('Y-m-d');

        $dataIbuIstri = $request->IbuIstri;
        $dataIbuIstri['tglLhr']= Carbon::createFromFormat('m/d/Y',$dataIbuIstri['tglLhr'])->format('Y-m-d');

        //Saksi
        $dataSaksiI = $request->SaksiI;
        $dataSaksiI['tglLhr']= Carbon::createFromFormat('m/d/Y',$dataSaksiI['tglLhr'])->format('Y-m-d');

        $dataSaksiII = $request->SaksiII;
        $dataSaksiII['tglLhr']= Carbon::createFromFormat('m/d/Y',$dataSaksiII['tglLhr'])->format('Y-m-d');

        $DataPerkawinan = $request->DataPerkawinan;
        $DataPerkawinan['tglPemberkatan']= Carbon::createFromFormat('m/d/Y',$DataPerkawinan['tglPemberkatan'])->format('Y-m-d');
        $DataPerkawinan['tglPencatatan']= Carbon::createFromFormat('m/d/Y',$DataPerkawinan['tglPencatatan'])->format('Y-m-d');
        $DataPerkawinan['tglPutusan']= Carbon::createFromFormat('m/d/Y',$DataPerkawinan['tglPutusan'])->format('Y-m-d');
        $DataPerkawinan_new = DataPerkawinan::create($DataPerkawinan);
        $pendaftaran=[
            'id'=>$this->unikKey,
            'suami_id'=> $dataSuami['nik'],
            'AyahSuami_id'=> $dataAyahSuami['nik'],
            'IbuSuami_id'=> $dataIbuSuami['nik'],
            'istri_id'=> $dataIstri['nik'],
            'AyahIstri_id'=> $dataAyahIstri['nik'],
            'IbuIstri_id'=> $dataIbuIstri['nik'],
            'SaksiI_id'=> $dataSaksiI['nik'],
            'SaksiII_id'=> $dataSaksiII['nik'],
            'DataPerkawinan_id'=> $DataPerkawinan_new['id'],
            'doc_id'=> $this->unikKey
        ];
        Pendaftaran::create($pendaftaran);
        //Suami
        Suami::firstOrCreate($dataSuami);
        AyahSuami::firstOrCreate($dataAyahSuami);
        IbuSuami::firstOrCreate($dataIbuSuami);
        //Istri
        Istri::firstOrCreate($dataIstri);
        AyahIstri::firstOrCreate($dataAyahIstri);
        IbuIstri::firstOrCreate($dataIbuIstri);
        //Saksi
        SaksiI::firstOrCreate($dataSaksiI);
        SaksiII::firstOrCreate($dataSaksiII);
        $this->uploadDoc($request->file('doc'),$path);
        //dd($request->all());
        //dd($pendaftaran);
        //$this->uploadDoc($request->file('doc'),$path);
        //dd($request->file('doc'));
        //$date = Carbon::createFromFormat('d/m/Y',$dataSuami['tglLhr']);
        //dd($date->format('Y-m-d'));
        //dd($dataSuami['tglLhr']);
        return view('sukses')->with('nomor',$pendaftaran['id']);
        //dd($request->all());
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

    public function sukses(Request $request){
        return view('sukses');
    }

    public function printGan(Request $request){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Form Pendaftaran</h1><br/><h2>Nomor pendaftaran :'.$request->daftar_num.'</h2>');
        return $pdf->stream();
    }
}
