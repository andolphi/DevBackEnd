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

Auth::routes();

// rotas Usuários
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user','UserController@index')->name('admin.users');
Route::get('/adduser','UserController@create')->name('admin.formAddUser');
Route::post('/adduser','UserController@store')->name('admin.addUser');
Route::get('/edituser/{id}','UserController@edit')->name('admin.formEdtUser');
Route::post('/edituser/{id}','UserController@update')->name('admin.edtUser');
Route::get('/remuser/{id}','UserController@destroy')->name('admin.remUser');

// rotas Vendedores
Route::get('/vendedores','VendedorController@index')->name('admin.vendedores');
Route::get('/addVend','VendedorController@create')->name('admin.formAddVend');
Route::post('/addVend','VendedorController@store')->name('admin.addVend');
Route::get('/editVend/{id}','VendedorController@edit')->name('admin.formEdtVend');
Route::post('/editVend/{id}','VendedorController@update')->name('admin.edtVend');
Route::get('/remVend/{id}','VendedorController@destroy')->name('admin.remVend');

// rotas Clientes
Route::get('/clientes','ClienteController@index')->name('admin.clientes');
Route::get('/addCliente','ClienteController@create')->name('admin.formAddCliente');
Route::post('/addCliente','ClienteController@store')->name('admin.addCliente');
Route::get('/editCliente/{id}','ClienteController@edit')->name('admin.formEdtCliente');
Route::post('/editCliente/{id}','ClienteController@update')->name('admin.edtCliente');
Route::get('/remCliente/{id}','ClienteController@destroy')->name('admin.remCliente');

// rotas Serviços Site
Route::get('/servicos','ServicoController@index')->name('admin.servicos');
Route::get('/editServico/{id}','ServicoController@edit')->name('admin.formEdtServico');
Route::post('/editServico/{id}','ServicoController@update')->name('admin.edtServico');


