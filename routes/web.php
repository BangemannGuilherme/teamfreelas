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

// Route::get('/', function () {
//     return view('layout/index');
// });


// Admin Routes
Route::middleware(['web'])->group(function () {
    Route::prefix('admin')->group(function (){
        Route::get('/', 'Admin\\AdminController@index')->name('admin');

        Route::get('login', 'Admin\\AuthController@index')->name('admin.login.index');
        Route::post('login', 'Admin\\AuthController@auth')->name('admin.login');

        Route::get('logout', 'Admin\\AuthController@logout')->name('admin.logout');

        Route::get('users', 'Admin\\UsuarioController@index')->name('usuario');

        Route::get('freelancers', 'Admin\\FreelancerController@index')->name('freelancer');

        Route::get('propostas', 'Admin\\PropostaController@index')->name('proposta');
    });
});
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
