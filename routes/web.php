<?php

use Illuminate\Support\Facades\Route;

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

// Admin Routes
Route::middleware(['web'])->group(function () {
    Route::prefix('admin')->group(function (){
        Route::get('/', 'Admin\\AdminController@index')->name('admin');

        Route::get('login', 'Admin\\AuthController@index')->name('admin.login.index');
        Route::post('login', 'Admin\\AuthController@auth')->name('admin.login');

        Route::get('logout', 'Admin\\AuthController@logout')->name('admin.logout');

        Route::get('users', 'Admin\\UsuarioController@index')->name('usuario');
        Route::get('users/create', 'Admin\\UsuarioController@create')->name('usuario.create');
        Route::post('users/create', 'Admin\\UsuarioController@store')->name('usuario.store');
        Route::get('users/edit/{id}', 'Admin\\UsuarioController@edit')->name('usuario.edit');
        Route::post('users/edit/{id}', 'Admin\\UsuarioController@update')->name('usuario.update');
        Route::get('users/destroy/{id}', 'Admin\\UsuarioController@destroy')->name('usuario.destroy');

        Route::get('freelancers', 'Admin\\FreelancerController@index')->name('freelancer');

        Route::get('propostas', 'Admin\\PropostaController@index')->name('proposta');

        Route::get('servicos', 'Admin\\ServicoController@index')->name('servico');

        Route::get('contratos', 'Admin\\ContratoController@index')->name('contrato');
    });
});

// Page Routes
Route::middleware(['web'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('login', 'AuthController@index')->name('login.index');
    Route::post('login', 'AuthController@auth')->name('login');

    Route::get('registro', 'AuthController@indexRegistro')->name('registro.index');
    Route::post('registro', 'AuthController@registro')->name('registro');

    Route::get('logout', 'AuthController@logout')->name('logout');
});

// Page Routes Auth
Route::middleware(['auth'])->group(function () {
    Route::get('perfil/{username}', 'PrincipalController@perfilUsuario')->name('usuario.perfil');
    Route::post('perfil/{id}', 'PrincipalController@perfilUsuarioAtualizar')->name('usuario.perfil.update');
});