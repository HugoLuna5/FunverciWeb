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
Route::get('/redirect', function (){
    $role = Auth::user()->account_type;

    // Check user role
    switch ($role) {
        case 'Admin':
            return redirect('/admin');
        case 'Capturista':
            return redirect('/home');

        default:
            return 0;

    }
})->middleware('auth');
Route::get('/', function () {
    return redirect('/login');
});


/**
 * Routes Admin
 */
Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::prefix('/admin')->group(function () {

        Route::get('', 'App\Http\Controllers\Admin\HomeController@index')->name('homeAdmin');


        Route::prefix('/users')->group(function () {
            Route::get('', 'App\Http\Controllers\Admin\UserController@index')->name('usersAdmin');
            Route::get('/create', 'App\Http\Controllers\Admin\UserController@create')->name('userCreateAdmin');
            Route::post('/save', 'App\Http\Controllers\Admin\UserController@save')->name('userSaveAdmin');
            Route::get('/show/{id}', 'App\Http\Controllers\Admin\UserController@show')->name('userShowAdmin');
            Route::post('/delete', 'App\Http\Controllers\Admin\UserController@delete')->name('userDeleteAdmin');
            Route::post('/update', 'App\Http\Controllers\Admin\UserController@update')->name('userUpdateAdmin');
        });


        Route::prefix('/af')->group(function () {
            Route::get('', 'App\Http\Controllers\Admin\AfiliadoController@index')->name('afAdmin');
            Route::get('/create', 'App\Http\Controllers\Admin\AfiliadoController@create')->name('afCreateAdmin');
            Route::post('/save', 'App\Http\Controllers\Admin\AfiliadoController@save')->name('afSaveAdmin');
            Route::get('/show/{id}', 'App\Http\Controllers\Admin\AfiliadoController@show')->name('afShowAdmin');
            Route::post('/delete', 'App\Http\Controllers\Admin\AfiliadoController@delete')->name('afDeleteAdmin');
            Route::post('/update', 'App\Http\Controllers\Admin\AfiliadoController@update')->name('afUpdateAdmin');
        });

        Route::prefix('/tp')->group(function () {
            Route::get('', 'App\Http\Controllers\Admin\TrasnporteController@index')->name('tpAdmin');
            Route::get('/create', 'App\Http\Controllers\Admin\TrasnporteController@create')->name('tpCreateAdmin');
            Route::post('/save', 'App\Http\Controllers\Admin\TrasnporteController@save')->name('tpSaveAdmin');
            Route::get('/show/{id}', 'App\Http\Controllers\Admin\TrasnporteController@show')->name('tpShowAdmin');
            Route::post('/delete', 'App\Http\Controllers\Admin\TrasnporteController@delete')->name('tpDeleteAdmin');
            Route::post('/update', 'App\Http\Controllers\Admin\TrasnporteController@update')->name('tpUpdateAdmin');
        });

    });
});



