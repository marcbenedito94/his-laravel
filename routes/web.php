<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function (){
    $users = DB::table('users')->get();
    $user_name = Session::get('miSesionTexto');
    $user_role = DB::table('users')->where('username', $user_name)->value('role');

    return view('dashboard.dashboard', compact('users','user_role'));
});

Route::post('/', function () {
    if ($_POST) {
        Session::put('miSesionTexto', Input::get('txtTexto'));

        return view('index');
    }

    return view('index');
});

Route::get('/paginados', function () {
    return view('paginados');
});

Route::get('/paginatres', function () {
    return view('paginatres');
});

Route::get('/paginacuatro', function () {
    return view('paginacuatro');
});

Route::get('/cerrarsesion', function () {
    Session::forget('miSesionTexto');

    return view('index');
});
