<?php

namespace App\Http\Controllers;

use App\Desa;
use App\Kabupaten;
use App\Kecamatan;
use App\Penduduk;
use App\Provinsi;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class Indonesia extends Controller
{
    public function getProvinsi(Request $request){
        /*dd($request->id);*/

        //print_r(Provinsi::all()->toJson());
        $prov = Provinsi::find($request->id);
        echo "<pre>";
        print_r($prov->kabupaten);
    }
    public function getKabupaten(Request $request){
        $data = Kabupaten::where('id_prov', $request->id)->get();
        return response()->json($data);
    }
    public function getKecamatan(Request $request){
        $data = Kecamatan::where('id_kabupaten', $request->id)->get();
        return response()->json($data);
    }
    public function getDesa(Request $request){
        $data = Desa::where('id_kecamatan', $request->id)->get();
        return response()->json($data);
    }

    public function cekNik(Request $request)
    {
        $data = Penduduk::where('nik', $request->id);
        return response()->json($data->get());
    }
}
