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
// Route::middleware(['web'])->group(function () {
    Route::prefix('admin')->group(function (){
        // Auth::routes();

        // Route::get('/', function () {
        //     return view('admin/master');
        // });

        Route::get('/', 'Admin\\AdminController@index')->name('admin');
        Route::get('login', function () {
            return view('admin/login');
        });

        Route::post('login', 'Admin\\AuthController@auth')->name('admin.login');

        // Route::post('auth', AuthController::class);
        // Route::post('auth', AuthController::class,'auth')->name('auth');


        // Route::get('/login', 'Auth\AuthController@showLoginForm');
        // Route::post('/login', 'Auth\AuthController@postLogin');
        // Route::get('/logout', 'Auth\AuthController@logout');

        // Route::post('auth', AuthController::class);
        // Route::resource('users', UsuarioController::class);
        // Route::resource('freelancers', FreelancerController::class);

    });
// });