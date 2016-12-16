<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
/*Route::get('qr', function () {
    return view('qr');
});*/
Route::match(['get','post'],'qr',function(){
    if(Input::has('stringasal')){
        return back()->withInput();
    }
    else
        return view('qr');
});
Route::get('daftar','PendaftaranController@index');
Route::get('cetak','PendaftaranController@cetak');
Route::get('sukses','PendaftaranController@sukses');
Route::post('daftar','PendaftaranController@Submit');
Route::post('cekNik','Indonesia@cekNik');
Route::post('print','PendaftaranController@printGan');

//Route::post('print',function(\Symfony\Component\HttpFoundation\Request $request){
//   //return view('demo');
//    $data = [
//        'test' => 'halo',
//    ];
//    $pdf = App::make('dompdf.wrapper');
//    $pdf->loadHTML('<h1>Form Pendaftaran</h1><br/><h2>Nomor pendaftaran :'.$request->daftar_num.'</h2>');
//    return $pdf->stream();
//    //$pdf = \PDF::loadView('welcome');
//    //return $pdf->download('test.pdf');
//});

Route::group(['prefix' => 'wilayah'],function(){
    Route::get('provinsi/{id}',[
        'as' => 'provinsi',
        'uses' => 'Indonesia@getProvinsi',
    ]);
    Route::post('kabupaten',[
        'as' => 'kabupaten',
        'uses' => 'Indonesia@getKabupaten',
    ]);
    Route::post('kecamatan',[
        'as' => 'kecamatan',
        'uses' => 'Indonesia@getKecamatan',
    ]);
    Route::post('desa',[
        'as' => 'desa',
        'uses' => 'Indonesia@getDesa',
    ]);
});
