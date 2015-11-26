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

Route::get('step',function(){
   return view('demo');
});

Route::post('submit-daftar','PendaftaranController@Submit');

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