<?php

use Illuminate\Support\Facades\Route;
use Admin\UsuarioController;


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
Route::prefix('admin')->name('admin')->group(function (){
    Route::get('/', function () {
        return view('admin/master');
    });
    Route::get('login', function () {
        return view('admin/login');
    });



    Route::resource('users', UsuarioController::class);
    Route::resource('freelancers', FreelancerController::class);

});