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

        Route::get('', '');

    });
});



