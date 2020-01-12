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

Route::get('/', function () {
    return view('home');
});

Route::resource('cuentas', 'CuentasController');

Route::get('cuentas/destroy/{cuenta}',[
  'as'=> 'cuenta-delete',
  'uses' => 'CuentasController@destroy'
]);

Route::resource('transacciones', 'TransaccionController');

Route::get('transaciones/delete/{transaccion}',[
  'as'=> 'transaccion-delete',
  'uses' => 'TransaccionController@destroy'
]);

Route::get('cuentas/edit/{cuenta}',[
  'as'=> 'cuenta-edit',
  'uses' => 'CuentasController@edit'
]);
