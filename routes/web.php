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
        Route::get('servicos/destroy/{id}', 'Admin\\ServicoController@destroy')->name('servico.destroy');

        Route::get('contratos', 'Admin\\ContratoController@index')->name('contrato');

        Route::get('status', 'Admin\\StatusController@index')->name('status');
        Route::get('status/create', 'Admin\\StatusController@create')->name('status.create');
        Route::post('status/create', 'Admin\\StatusController@store')->name('status.store');
        Route::get('status/edit/{id}', 'Admin\\StatusController@edit')->name('status.edit');
        Route::post('status/edit/{id}', 'Admin\\StatusController@update')->name('status.update');
        Route::get('status/destroy/{id}', 'Admin\\StatusController@destroy')->name('status.destroy');
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

    Route::get('freelancers', 'PrincipalController@freelancer')->name('freelancer.list');

    Route::get('servicos', 'PrincipalController@servico')->name('servico.list');
    Route::get('servicos/create', 'PrincipalController@servicoCreate')->name('servico.create');
    Route::post('servicos/create', 'PrincipalController@servicoStore')->name('servico.store');
    Route::get('servicos/{id}', 'PrincipalController@servicoShow')->name('servico.show');
    Route::post('servicos/solicitacao', 'PrincipalController@solicitacaoPendente')->name('solicitacao');

    Route::post('solicitacao/create', 'PrincipalController@solicitacaoStore')->name('solicitacao.store');
});

// Page Routes Auth
Route::middleware(['auth'])->group(function () {
    Route::get('perfil/{username}', 'PrincipalController@perfilUsuario')->name('usuario.perfil');
    Route::post('perfil/{id}', 'PrincipalController@perfilUsuarioAtualizar')->name('usuario.perfil.update');
    Route::post('perfil/freelancer_{id}', 'PrincipalController@perfilFreelancerAtualizar')->name('freelancer.perfil.update');
    Route::get('perfil/{username}/servicos', 'PrincipalController@servicosUsuario')->name('usuario.servicos');
});