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
    /*return view('index');*/
    return redirect('/qr');
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
