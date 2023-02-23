<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardGraphController;
use App\Http\Controllers\DashboardUsersController;

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
    return view('homepage', [
        "title" => "Homepage"
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::middleware('role:admin')->get('/dashboard', function() {
//     return view('dashboard');
// })->name('dashboard');




Route::resource('/dashboard/users', DashboardUsersController::class)->middleware('auth');
Route::resource('/dashboard/graphs', DashboardGraphController::class)->middleware('auth');

Route::resource('/presensi/masuk', PresensiController::class);
Route::get('/loginpage', function () {
    return view('loginpage.index');
});

Route::group(['middleware' => ['auth','cekLevel:admin']], function (){
    Route::middleware('role:admin')->get('/dashboard', function() {
        return view('dashboard.index');
    })->middleware('auth');
});